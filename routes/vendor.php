<?php

use Illuminate\Support\Facades\Route;


// vendor Routes

Route::group(['namespace'=>'Vendor'],function(){

    Route::get('login', function(){
        return view('vendor.auth.login');
    })->name('vendor.login');
    
    Route::post('login','loginController@postLogin')->name('vendor.post.login');
    Route::get('/password/forgot','loginController@showForgotForm')->name('vendor.forgot.password.form');
    Route::post('/password/forgot','loginController@sendResetLink')->name('vendor.forgot.password.link');
    Route::get('/password/reset/{token}','loginController@showResetForm')->name('vendor.reset.password.form');
    Route::post('/password/reset','loginController@resetPassword')->name('vendor.reset.password');

}); // prefix in RouteServiceProvider


Route::group(['namespace'=>'Vendor','middleware'=>'auth:vendor'],function(){

    Route::get('/', 'VendorDashboardController@index')->name('vendor.dashboard'); // the first page vendor visits if authenticated
    Route::get('logout', 'loginController@logout')->name('vendor.logout'); // admon custonm logOut
    Route::get('vendors',function(){
        return view('vendor.pages.vendors.index');
    })->name('vendors.vendors');//admins
    Route::get('books', function () {
        return view('vendor.pages.book.index');
    })->name('vendor.books');; //books
    
    Route::get('ProfileAdmin',function(){
        return view('vendor.pages.vendor.profile');
    })->name('vendor.profileVendor'); //AdminProfile

}); // prefix in RouteServiceProvider