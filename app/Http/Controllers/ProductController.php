<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\ProductsAttribute;
use App\ProductsImage;
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
      $product->status=$data['status'];
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
        'status'=>$request->status,
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
  function add_product_attribute($product_id,Request $request){
    if($request->isMethod('post')){
      $data=$request->all();
      foreach ($data['sku'] as $key => $value) {
        if(!empty($value)){
          $count_sku = ProductsAttribute::where(['sku'=>$value])->count();
                    if($count_sku>0){
                        return redirect('/admin/add/product/attribute/'.$product_id)->with('error_message', 'SKU already exists. Please add another SKU.');
                    }
                    $count_sizes = ProductsAttribute::where(['product_id'=>$product_id,'size'=>$data['size'][$key]])->count();
                    if($count_sizes>0){
                        return redirect('/admin/add/product/attribute/'.$product_id)->with('error_message', 'Attribute already exists. Please add another Attribute.');
                    }
          $attribute=new ProductsAttribute;
          $attribute->product_id=$product_id;
          $attribute->sku=$value;
          $attribute->size=$data['size'][$key];
          $attribute->price=$data['price'][$key];
          $attribute->stock=$data['stock'][$key];
          $attribute->save();
        }
      }
      return redirect('/admin/add/product/attribute/'.$product_id)->with('success_message','Attributes added successfully!');
    }
    $product=Product::with('relationtoattributes')->find($product_id);
    //$product=json_decode(json_encode($product));
    //print_r($product);
    return view('backend/add_product_attribute',compact('product'));
  }
  function delete_product_attribute($attribute_id){
    ProductsAttribute::where('id',$attribute_id)->delete();
    return redirect()->back()->with('success_message','Attribute deleted successfully!');
  }

  function add_product_image($product_id,Request $request){
    if($request->isMethod('post')){
      $data=$request->all();
      foreach ($data['image'] as $key => $value) {
        if(!empty($value)){
            $photo_to_upload=$value;
            $filename=$request->id."-".($data['name'][$key]).".".$photo_to_upload->getClientOriginalExtension();
            $check_image = ProductsImage::where(['image'=>$filename])->count();
                      if($check_image>0){
                          return redirect('/admin/add/product/image/'.$product_id)->with('error_message', 'Image name already exists. Please add another name.');
                      }

            $save_img = Image::make($photo_to_upload)->resize(200, 200)->save(base_path('public/uploads/product_photos/'.$filename));

              $products_image=new ProductsImage;
              $products_image->product_id=$product_id;
              $products_image->image=$filename;
              $products_image->save();
        }
      }
      return redirect('/admin/add/product/image/'.$product_id)->with('success_message','Image added successfully!');
    }
    $product=Product::with('relationtoattributes')->find($product_id);
    //$product=json_decode(json_encode($product));
    //print_r($product);
    return view('backend/add_product_image',compact('product'));
  }
  function delete_product_image($image_id){
    $delete_this_photo=ProductsImage::find($image_id)->image;
    unlink(base_path('public/uploads/product_photos/'.$delete_this_photo));
    ProductsImage::where('id',$image_id)->delete();
    return redirect()->back()->with('success_message','Image deleted successfully!');
  }
  function edit_product_attribute($attribute_id, Request $request){
    // $data=$request->all();
    // $product=json_decode(json_encode($data));
    // print_r($data);
    ProductsAttribute::where('id',$request->id)->update([

      'price'=>$request->price,
      'stock'=>$request->stock,
    ]);
    return redirect()->back()->with('success_message','Attribute updated successfully!');
  }
}
