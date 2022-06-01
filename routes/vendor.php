<?php

use Illuminate\Support\Facades\Route;


// vendor Routes

Route::group(['namespace'=>'Vendor'],function(){

    Route::get('login', function(){
        return view('vendor.auth.login');
    })->name('vendor.login');
    
    Route::post('login','LoginController@postLogin')->name('vendor.post.login');
    Route::get('/password/forgot','LoginController@showForgotForm')->name('vendor.forgot.password.form');
    Route::post('/password/forgot','LoginController@sendResetLink')->name('vendor.forgot.password.link');
    Route::get('/password/reset/{token}','LoginController@showResetForm')->name('vendor.reset.password.form');
    Route::post('/password/reset','LoginController@resetPassword')->name('vendor.reset.password');

}); // prefix in RouteServiceProvider


Route::group(['namespace'=>'Vendor','middleware'=>'auth:vendor'],function(){

    Route::get('/', 'VendorDashboardController@index')->name('vendor.dashboard'); // the first page vendor visits if authenticated
    Route::get('logout', 'LoginController@logout')->name('vendor.logout'); // admon custonm logOut
    Route::get('vendors',function(){
        return view('vendor.pages.vendors.index');
    })->name('vendors.vendors');//admins

   


}); // prefix in RouteServiceProvider