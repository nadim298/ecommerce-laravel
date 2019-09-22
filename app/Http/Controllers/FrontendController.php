<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;
use App\Cart;
use Carbon\Carbon;
use App\Category;
use App\ProductsAttribute;
use App\Contact;
use Mail;
use App\Mail\ContactMessage;
class FrontendController extends Controller
{
    function index(){
      $categories=Category::with('relationtosubcategory')->where(['parent_id' => 0])->where('status','1')->get();
      $products=Product::where('status','1')->get();
      return view('welcome',compact('categories','products'));
    }
    function contact(){
        return view('frontend/contact');
    }
    function about(){
        return view('about');
    }
    function productdetails($product_id){
      $singleProductInfo=Product::with('relationtoattributes')->find($product_id);
      $relatedProducts=Product::where('id','!=' ,$product_id)->where('category_id', $singleProductInfo->category_id)->where('status','1')->get();
      $totalstock=ProductsAttribute::where('product_id',$singleProductInfo->id)->sum('stock');
      // echo $stock;
      return view('frontend/productdetails',compact('singleProductInfo','relatedProducts','totalstock'));
    }
    function categorywiseproduct($url){
      $products="";
      if ($url=='all') {
        $products=Product::all();
        $category_details = (object)array("name"=>"All Category");
      }
      else{
        $categoryCount = Category::where(['url'=>$url,'status'=>1])->count();
      	if($categoryCount==0){
      		return view('frontend/error404');
      	}


        $category_details = Category::where('url',$url)->first();

        if($category_details->parent_id==0){
          $subcategory_ids[]=$category_details->id;
          foreach ($category_details->relationtosubcategory as $subcategory) {
            $subcategory_ids[]=$subcategory->id;
          }
          $products=Product::whereIn('category_id',$subcategory_ids)->get();
        }
        else{

          $products=Product::where('category_id',$category_details->id)->get();
        }
      }

      // $productsAll = json_decode(json_encode($products));
      //   echo "<pre>"; print_r($productsAll); die;
      return view('frontend/categorywiseproduct',compact('products','category_details'));
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
    function get_attribute_details(Request $request){
      $data=$request->all();
      // echo "<pre>"; print_r($data); die;
        $attribute_array = explode("-",$data['idsize']);
        $product_attribute = ProductsAttribute::where(['product_id'=>$attribute_array[0],'size'=>$attribute_array[1]])->first();
        echo $product_attribute->price;
        echo "#";
        echo $product_attribute->stock;
        // echo $attribute_array[1];
    }
}
