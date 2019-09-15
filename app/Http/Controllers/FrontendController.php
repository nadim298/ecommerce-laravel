<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cart;
use Carbon\Carbon;
use App\Category;
use App\Contact;
use Mail;
use App\Mail\ContactMessage;
class FrontendController extends Controller
{
    function index(){
      $products=Product::all();
      $categories=Category::all();
        return view('welcome',compact('products','categories'));
    }
    function contact(){
        return view('frontend/contact');
    }
    function about(){
        return view('about');
    }
    function productdetails($product_id){
      $singleProductInfo=Product::find($product_id);
      $relatedProducts=Product::where('id','!=' ,$product_id)->where('category_id', $singleProductInfo->category_id)->latest()->take(4)->get();

      return view('frontend/productdetails',compact('singleProductInfo','relatedProducts'));
    }
    function categorywiseproduct($category_id){
      $products=Product::where('category_id', $category_id)->get();
      return view('frontend/categorywiseproduct',compact('products','category_id'));
    }
    function addtocart($product_id){
      $customer_ip= $_SERVER['REMOTE_ADDR'];
      if(Cart::where('customer_ip', $customer_ip)->where('product_id', $product_id)->exists()){
        Cart::where('customer_ip', $customer_ip)->where('product_id', $product_id)->increment('product_quantity');
      }
      else {
        Cart::insert([
          'customer_ip'=> $customer_ip,
          'product_id'=> $product_id,
          'created_at'=> Carbon::now(),
        ]);
      }

      return back();
    }
    function cart(){
      $cart_items=Cart::where('customer_ip',$_SERVER['REMOTE_ADDR'])->get();
      return view('frontend/cart', compact('cart_items'));
    }
    function deletefromcart($item_id){
      Cart::find($item_id)->delete();
      return back();
    }
    function clearcart(){
      Cart::where('customer_ip',$_SERVER['REMOTE_ADDR'])->delete();
      return back();
    }
    function contactmessageinsert(Request $request){
      $name=$request->name;
      $message=$request->message;
      Contact::insert($request->except('_token'));
      Mail::to('404nadim@gmail.com')->send(new ContactMessage($name,$message));
      return back()->with('status','You message has been successfully sent!');
    }
}
