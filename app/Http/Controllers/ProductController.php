<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Image;
class ProductController extends Controller
{
  function add_product(Request $request){
    if($request->isMethod('post')){
      $data=$request->all();
      $product=new Product;
      $product->category_id=$data['category_id'];
      $product->product_name=$data['product_name'];
      $product->product_code=$data['product_code'];
      $product->product_color=$data['product_color'];
      $product->description=$data['description'];
      $product->price=$data['price'];
      $product->image='defaultproductphoto.jpg';
      $product->save();
      $last_inserted_id=$product->id;

      if($request->hasFile('image')){
        $photo_to_upload=$request->image;
        $filename=$last_inserted_id.".".$photo_to_upload->getClientOriginalExtension();
        $save_img = Image::make($photo_to_upload)->resize(200, 200)->save(base_path('public/uploads/product_photos/'.$filename));

        Product::where('id',$last_inserted_id)->update([
          'image'=>$filename
        ]);
      }
      return redirect('/admin/view/product')->with('success_message','New product added successfully!');
    }
    $main_categories=Category::where('parent_id','0')->get();
    return view('backend/add_product',compact('main_categories'));
  }
  function view_product(){
    $products=Product::all();
    return view('backend/view_product',compact('products'));
  }
  function edit_product($product_id,Request $request){
    if($request->isMethod('post')){
      Product::where('id',$request->id)->update([
        'category_id'=>$request->category_id,
        'product_name'=>$request->product_name,
        'product_code'=>$request->product_code,
        'product_color'=>$request->product_color,
        'description'=>$request->description,
        'price'=>$request->price,
      ]);
      if($request->hasFile('image')){
        if(Product::find($request->id)->image =='defaultproductphoto.jpg'){
          $photo_to_upload=$request->image;
          $filename=$request->id.".".$photo_to_upload->getClientOriginalExtension();
          $save_img = Image::make($photo_to_upload)->resize(200, 200)->save(base_path('public/uploads/product_photos/'.$filename));

          Product::where('id',$request->id)->update([
            'image'=>$filename
          ]);
        }
        else{
          $delete_this_photo=Product::find($request->id)->image;
          unlink(base_path('public/uploads/product_photos/'.$delete_this_photo));
          $photo_to_upload=$request->image;
          $filename=$request->id.".".$photo_to_upload->getClientOriginalExtension();
          $save_img = Image::make($photo_to_upload)->resize(200, 200)->save(base_path('public/uploads/product_photos/'.$filename));

          Product::where('id',$request->id)->update([
            'image'=>$filename
          ]);
        }
      }
      return redirect('/admin/view/product')->with('success_message','Product updated successfully!');
    }
    $product=Product::find($product_id);
    $main_categories=Category::where('parent_id','0')->get();
    return view('backend/edit_product',compact('product','main_categories'));
  }
  function delete_product($product_id){
    $delete_this_photo=Product::find($product_id)->image;
      if($delete_this_photo!='defaultproductphoto.jpg'){
        unlink(base_path('public/uploads/product_photos/'.$delete_this_photo));
      }
    Product::where('id',$product_id)->delete();
    return redirect('/admin/view/product')->with('success_message','Product deleted successfully!');
  }
}
