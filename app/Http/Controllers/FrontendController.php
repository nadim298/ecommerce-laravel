<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;
use App\Cart;
use Carbon\Carbon;
use App\Category;
use App\ProductsAttribute;
use App\Coupon;
use App\Contact;
use Mail;
use App\Mail\ContactMessage;
use Auth;
use Session;
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
        $products=Product::where('status','1')->get();
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
          $products=Product::whereIn('category_id',$subcategory_ids)->where('status','1')->get();
        }
        else{

          $products=Product::where('category_id',$category_details->id)->where('status','1')->get();
        }
      }

      // $productsAll = json_decode(json_encode($products));
      //   echo "<pre>"; print_r($productsAll); die;
      return view('frontend/categorywiseproduct',compact('products','category_details'));
    }
    function addtocart(Request $request){
      Session::forget('CouponAmount');
        Session::forget('CouponCode');

      if($request->isMethod('post')){

        $data=$request->all();
        if(empty(Auth::user()->email)){
            $data['user_email'] = '';
        }else{
            $data['user_email'] = Auth::user()->email;
        }
        $session_id = Session::get('session_id');
        if(!isset($session_id)){
            $session_id = str_random(40);
            Session::put('session_id',$session_id);
        }
        $sizeIDArr = explode('-',$data['size']);
        $product_size = $sizeIDArr[1];
        $product_attribute_details=ProductsAttribute::select('sku','stock')->where(['product_id' => $data['product_id'], 'size' => $product_size])->first();
        $item_count=Cart::where('session_id',$session_id)->where('product_id',$data['product_id'])->where('size',$product_size)->count();
        if($product_attribute_details->stock>=$data['quantity']){
          if($item_count==0){

            $Cart=new Cart;
            $Cart->product_id=$data['product_id'];
            $Cart->product_name=$data['product_name'];
            $Cart->product_code=$product_attribute_details['sku'];
            $Cart->product_color=$data['product_color'];
            $Cart->size=$product_size;
            $Cart->price=$data['price'];
            $Cart->quantity=$data['quantity'];
            $Cart->user_email=$data['user_email'];
            $Cart->session_id=$session_id;

            $Cart->save();
            return back()->with('success_message','Successfully added to the cart!');
          }
          else{
            $cart_details = Cart::where('session_id',$session_id)->where('product_code',$product_attribute_details->sku)->first();
             $updated_quantity = $cart_details->quantity+$data['quantity'];
            if($product_attribute_details->stock>=$updated_quantity){
            Cart::where('product_id',$data['product_id'])->where('session_id',$session_id)->update(['quantity'=>$updated_quantity]);
          }
          else{
            return back()->with('error_message','No available stock!');
          }
        }


      }
        //echo "<pre>"; print_r($data); die;


    }
  }
    function cart(){
      // $cart_items=Cart::where('customer_ip',$_SERVER['REMOTE_ADDR'])->get();
      $session_id = Session::get('session_id');
      $cart_items=Cart::where('session_id',$session_id)->get();
      $total=0;
      foreach ($cart_items as $cart_item) {
        $per_item_total=$cart_item->price*$cart_item->quantity;
        $total=$per_item_total+$total;
      }
      return view('frontend/cart', compact('cart_items','total'));
    }
    function deletefromcart($item_id){
      Session::forget('CouponAmount');
        Session::forget('CouponCode');
        
      Cart::find($item_id)->delete();
      return back();
    }
    function clearcart(){

      $session_id = Session::get('session_id');
      Cart::where('session_id',$session_id)->delete();
      return back();
    }
    function cart_update_quantity($item_id,$quantity){
      Session::forget('CouponAmount');
        Session::forget('CouponCode');

      $getProductSKU = Cart::select('product_code','quantity')->where('id',$item_id)->first();
       $getProductStock = ProductsAttribute::where('sku',$getProductSKU->product_code)->first();
       $updated_quantity = $getProductSKU->quantity+$quantity;
      $session_id = Session::get('session_id');
      if($getProductStock->stock>=$updated_quantity){

        Cart::where('id',$item_id)->where('session_id',$session_id)->increment('quantity',$quantity);
        return back()->with('success_message','Successfully updated product quantity!');
      }
      else{
        return back()->with('error_message','No available stock!');
      }
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
    function apply_coupon(Request $request){
      Session::forget('CouponAmount');
        Session::forget('CouponCode');

      $data=$request->all();
      // echo "<pre>"; print_r($data); die;
      $couponCount = Coupon::where('coupon_code',$data['coupon_code'])->count();
        if($couponCount == 0){
            return redirect()->back()->with('error_message','This coupon does not exists!');
        }
        else{
            // with perform other checks like Active/Inactive, Expiry date..
            // Get Coupon Details
            $couponDetails = Coupon::where('coupon_code',$data['coupon_code'])->first();
            
            // If coupon is Inactive
            if($couponDetails->status==0){
                return redirect()->back()->with('error_message','This coupon is not active!');
            }
            // If coupon is Expired
            $expiry_date = $couponDetails->expiry_date;
            $current_date = date('Y-m-d');
            if($expiry_date < $current_date){
                return redirect()->back()->with('error_message','This coupon is expired!');
            }
            // Coupon is Valid for Discount
            // Get Cart Total Amount
            // if(Auth::check()){
            //     $user_email = Auth::user()->email;
            //     $userCart = Coupon::where(['user_email' => $user_email])->get();     
            // }else{
                $session_id = Session::get('session_id');
                $userCart = Cart::where(['session_id' => $session_id])->get();    
            // }
            $total_amount = 0;
            foreach($userCart as $item){
               $total_amount = $total_amount + ($item->price * $item->quantity);
            }
            // Check if amount type is Fixed or Percentage
            if($couponDetails->amount_type=="Fixed"){
                $couponAmount = $couponDetails->amount;
            }else{
                $couponAmount = $total_amount * ($couponDetails->amount/100);
            }
            // Add Coupon Code & Amount in Session
            Session::put('CouponAmount',$couponAmount);
            Session::put('CouponCode',$data['coupon_code']);
            return redirect()->back()->with('success_message','Coupon code successfully
                applied. You are availing discount!');
        }
    }
}
