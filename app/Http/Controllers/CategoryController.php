<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Carbon\Carbon;
class CategoryController extends Controller
{


    function add_category(Request $request){
      if($request->isMethod('post')){
        $data=$request->all();
        $category=new Category;
        $category->name=$data['name'];
        $category->parent_id=$data['parent_id'];
        $category->description=$data['description'];
        $category->url=$data['url'];
        $category->save();

        return redirect('/admin/view/category')->with('success_message','New category added successfully!');
      }
      $main_categories=Category::where('parent_id','0')->get();
      return view('backend/add_category',compact('main_categories'));
    }
    function view_category(){
      $categories=Category::all();
      return view('backend/view_category',compact('categories'));
    }
    function edit_category($category_id,Request $request){
      if($request->isMethod('post')){
        Category::where('id',$request->id)->update([
          'name'=>$request->name,
          'parent_id'=>$request->parent_id,
          'description'=>$request->description,
          'url'=>$request->url,
        ]);
        return redirect('/admin/view/category')->with('success_message','Category updated successfully!');
      }
      $category=Category::find($category_id);
      $main_categories=Category::where('parent_id','0')->get();
      return view('backend/edit_category',compact('category','main_categories'));
    }
    function delete_category($category_id){
      Category::where('id',$category_id)->delete();
      return redirect('/admin/view/category')->with('success_message','Category deleted successfully!');
    }
}
