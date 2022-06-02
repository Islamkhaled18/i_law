<?php

use Illuminate\Support\Facades\Route;


Route::get('login', function () {
    return 'ss';
})->name('login');

Route::get('lang/home', 'LangController@index');
Route::get('lang/change', 'LangController@change')->name('changeLang');


// Admin Routes

Route::group(['namespace' => 'Admin'], function () {

    Route::get('login', function () {
        return view('admin.auth.login');
    })->name('admin.login');

    Route::post('login', 'LoginController@postLogin')->name('admin.post.login');
    Route::get('/password/forgot', 'LoginController@showForgotForm')->name('forgot.password.form');
    Route::post('/password/forgot', 'LoginController@sendResetLink')->name('forgot.password.link');
    Route::get('/password/reset/{token}', 'LoginController@showResetForm')->name('reset.password.form');
    Route::post('/password/reset', 'LoginController@resetPassword')->name('reset.password');
}); // prefix in RouteServiceProvider


Route::group(['namespace' => 'Admin', 'middleware' => 'auth:admin'], function () {

    Route::get('/', 'DashboardController@index')->name('admin.dashboard'); // the first page admin visits if authenticated
    Route::get('logout', 'LoginController@logout')->name('admin.logout'); // admon custonm logOur
    Route::get('admins', function () {
        return view('admin.pages.admins.index');
    })->name('admins.admins'); //admins

    Route::get('currencies', function () {
        return view('admin.pages.currency.index');
    })->name('admin.currencies'); //currencies


    Route::get('countries', function () {
        return view('admin.pages.country.index');
    })->name('admin.countries'); //countries


    Route::get('governorates', function () {
        return view('admin.pages.governorate.index');
    })->name('admin.governorates'); //governorates

    Route::get('cities', function () {
        return view('admin.pages.city.index');
    })->name('admin.cities'); //cities

    Route::get('writers', function () {
        return view('admin.pages.writer.index');
    })->name('admin.writers'); //writers


    Route::get('sections', function () {
        return view('admin.pages.section.index');
    })->name('admin.sections'); //sections


    Route::get('vendors', function () {
        return view('admin.pages.vendor.index');
    })->name('admin.vendors'); //vendors


    Route::get('books', function () {
        return view('admin.pages.book.index');
    })->name('admin.books');; //books


    Route::get('users', function () {
        return view('admin.pages.user.index');
    })->name('admin.users'); //users

    Route::get('pages', function () {
        return view('admin.pages.page.index');
    })->name('admin.pages'); //pages


    Route::get('FAQs', function () {
        return view('admin.pages.faq.index');
    })->name('admin.FAQs'); //FAQs

    Route::get('roles', function () {
        return view('admin.pages.role.index');
    })->name('admin.roles'); //Roles


    Route::get('permissions', function () {
        return view('admin.pages.permission.index');
    })->name('admin.permissions'); //permissions

    // settings
    Route::resource('settings', 'SettingController');

    // ContactUs
    Route::resource('ContactUs', 'ContactController');

    Route::get('partners', function () {
        return view('admin.pages.partner.index');
    })->name('admin.patners'); //patners

    Route::get('ProfileAdmin',function(){
        return view('admin.pages.admins.profile');
    })->name('admin.profileAdmin'); //AdminProfile

    Route::get('shippings',function(){
        return view('admin.pages.shipping.index');
    })->name('admin.shipping'); //AdminProfile





}); // prefix in RouteServiceProvider