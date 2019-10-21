<?php

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/add/product/view', 'ProductController@addproductview');
Route::get('/add/category/view', 'CategoryController@addcategoryview');
Route::post('/add/product/insert', 'ProductController@addproductinsert');
Route::post('/add/category/insert', 'CategoryController@addcategoryinsert');
Route::get('/delete/product/{product_id}', 'ProductController@deleteproduct');
Route::get('/edit/product/{product_id}', 'ProductController@editproduct');
Route::post('/edit/product/insert', 'ProductController@editproductinsert');
Route::get('/restore/product/{deleted_product_id}', 'ProductController@restoreproduct');
Route::get('/force/delete/product/{deleted_product_id}', 'ProductController@forcedeleteproduct');
Route::get('/view/contact/message', 'HomeController@viewcontactmessage');

Route::match(['get','post'],'/admin', 'AdminController@login');
Route::get('/admin/logout', 'AdminController@logout');
Route::group(['middleware'=>['auth']], function(){
  Route::get('/admin/dashboard', 'AdminController@dashboard');
  Route::get('/admin/change_password', 'AdminController@change_password');
  Route::get('/admin/check/current/password', 'AdminController@check_current_password');
  Route::match(['get','post'],'/admin/update/password', 'AdminController@update_password');
  //category routes
  Route::match(['get','post'],'/admin/add/category', 'CategoryController@add_category');
  Route::match(['get','post'],'/admin/edit/category/{id}', 'CategoryController@edit_category');
  Route::match(['get','post'],'/admin/delete/category/{id}', 'CategoryController@delete_category');
  Route::get('/admin/view/category', 'CategoryController@view_category');
  //product routes
  Route::match(['get','post'],'/admin/add/product', 'ProductController@add_product');
  Route::get('/admin/view/product', 'ProductController@view_product');
  Route::match(['get','post'],'/admin/edit/product/{id}', 'ProductController@edit_product');
  Route::get('/admin/delete/product/{id}', 'ProductController@delete_product');
  //attribute route
  Route::match(['get','post'],'admin/add/product/attribute/{id}', 'ProductController@add_product_attribute');
  Route::get('/admin/delete/product/attribute/{id}', 'ProductController@delete_product_attribute');
  Route::post('/admin/edit/product/attribute/{id}', 'ProductController@edit_product_attribute');
  //image route
  Route::match(['get','post'],'/admin/add/product/image/{id}', 'ProductController@add_product_image');
  Route::get('/admin/delete/product/image/{id}', 'ProductController@delete_product_image');
  //coupon routes
  Route::match(['get','post'],'/admin/add/coupon', 'CouponController@add_coupon');
  Route::get('/admin/view/coupon', 'CouponController@view_coupon');
  Route::match(['get','post'],'/admin/edit/coupon/{id}', 'CouponController@edit_coupon');
  Route::get('/admin/delete/coupon/{id}', 'CouponController@delete_coupon');//
});

//frontend routes
Route::get('/', 'FrontendController@index');
Route::get('about', 'FrontendController@about');
Route::get('product/details/{product_id}', 'FrontendController@productdetails');
Route::get('category/wise/product/{url}', 'FrontendController@categorywiseproduct');
//cart routes
Route::match(['get','post'],'add/to/cart', 'FrontendController@addtocart');
Route::get('/cart', 'FrontendController@cart');
Route::get('/delete/from/cart/{item_id}', 'FrontendController@deletefromcart');
Route::get('/cart/update/quantity/{item_id}/{quantity}', 'FrontendController@cart_update_quantity');
Route::get('/clear/cart', 'FrontendController@clearcart');

Route::get('/contact', 'FrontendController@contact');
Route::post('/contact/message/insert', 'FrontendController@contactmessageinsert');
//get price from attribute
Route::get('/get/attribute/details', 'FrontendController@get_attribute_details');

Route::post('/apply/coupon', 'FrontendController@apply_coupon');

//user account routes
Route::get('/user/login/register', 'UserController@user_login_register');
Route::post('/user/register', 'UserController@user_register');
Route::get('/user/logout', 'UserController@user_logout');
