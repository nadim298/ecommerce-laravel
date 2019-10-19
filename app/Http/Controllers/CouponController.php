<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coupon;

class CouponController extends Controller
{
    function add_coupon(Request $request){
      if($request->isMethod('post')){
        $data=$request->all();
        // echo "<pre>"; print_r($data); die;

        $coupon=new Coupon;
        $coupon->coupon_code=$data['coupon_code'];
        $coupon->amount=$data['amount'];
        $coupon->amount_type=$data['amount_type'];
        $coupon->expiry_date=$data['expiry_date'];
        $coupon->status=$data['status'];
        $coupon->save();
        return redirect('/admin/view/coupon')->with('success_message','Coupon added successfully!');
      }
      return view('backend/add_coupon');
    }
    function view_coupon(){
        $coupons=Coupon::all();
        return view('backend/view_coupon', compact('coupons'));
    }
    function edit_coupon($coupon_id,Request $request){
        if($request->isMethod('post')){
            Coupon::where('id',$request->id)->update([
                'coupon_code'=>$request->coupon_code,
                'amount'=>$request->amount,
                'amount_type'=>$request->amount_type,
                'expiry_date'=>$request->expiry_date,
                'status'=>$request->status,
            ]);
            return redirect('/admin/view/coupon')->with('success_message','Coupon updated successfully!');
        }
        $coupon=Coupon::find($coupon_id);
        return view('backend/edit_coupon',compact('coupon'));
    }
    function delete_coupon($coupon_id){
        Coupon::where('id',$coupon_id)->delete();
        return redirect('/admin/view/coupon')->with('success_message','Coupon deleted successfully!');
    }
}
