<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\Api\AuthController;
use App\Http\Controllers\Vendor\Api\AuthVendorController;
use App\Http\Controllers\User\Api\CountyController;
use App\Http\Controllers\User\Api\CityController;
use App\Http\Controllers\User\Api\GovernorateController;
use App\Http\Controllers\User\Api\SettingController;
use App\Http\Controllers\User\Api\faqController;
use App\Http\Controllers\User\Api\ContactController;
use App\Http\Controllers\User\Api\SectionController;
use App\Http\Controllers\User\Api\WriterController;
use App\Http\Controllers\User\Api\VendorController;






// Route::prefix('user')->controller(AuthController::class)->group(function () {
Route::group(['prefix' => 'user'], function () {

    Route::post('login', [AuthController::class, 'login']);
    Route::post('register', [AuthController::class, 'register']);
    Route::middleware('auth:user_api')->group(function () {
        Route::post('logout', [AuthController::class, 'logout']);
        Route::post('me', [AuthController::class, 'me']);
    });
});


Route::group(['prefix' => 'vendor'], function () {

    Route::post('login', [AuthVendorController::class, 'login']);
    Route::post('register', [AuthVendorController::class, 'register']);
    Route::middleware('auth:vendor_api')->group(function () {
        Route::post('logout', [AuthVendorController::class, 'logout']);
        Route::post('me', [AuthVendorController::class, 'me']);
    });
});























// Route::group([
//     // 'middleware' => 'api',
//     'prefix' => 'auth'
// ], function ($router) {

//     // --------------- User ------------------------------ //

//     Route::group(['prefix' => 'user'], function () {

//         Route::post('/login', ['middleware' => 'auth:api',AuthController::class, 'login']);
//         Route::post('/register', [AuthController::class, 'register']);
//         Route::post('/logout', [AuthConAuthControllertroller::class, 'logout']);
//         Route::post('/refresh', [AuthController::class, 'refresh']);
//         Route::get('/user-profile', [AuthController::class, 'userProfile']);
//         Route::post('forgot-password', [AuthController::class, 'forgotPassword']);
//         Route::post('reset-password', [AuthController::class, 'reset'])->name('password.reset');
//     }); //User profile   


//     // --------------- Vendor ------------------------------ //
//     // Route::group(['prefix' => 'vendor'], function () {

//     //     Route::post('/login', [AuthVendorController::class, 'login']);
//     //     Route::post('/register', [AuthVendorController::class, 'register']);
//     //     Route::post('/logout', [AuthVendorController::class, 'logout']);
//     //     Route::post('/refresh', [AuthVendorController::class, 'refresh']);
//     //     Route::get('/user-profile', [AuthVendorController::class, 'userProfile']);
//     // }); //edit & update Vendor profile

// });



















/// contry ///
Route::group(['prefix' => 'countries'], function () {

    Route::get('/countries', [CountyController::class, 'index']);
    Route::get('/country/{id}', [CountyController::class, 'show']);
});
// contry ///

/// city ///
Route::group(['prefix' => 'cities'], function () {

    Route::get('/cities', [CityController::class, 'index']);
    Route::get('/city/{id}', [CityController::class, 'show']);
});
// city ///
/// governorates ///
Route::group(['prefix' => 'governorates'], function () {

    Route::get('/governorates', [GovernorateController::class, 'index']);
    Route::get('/governorate/{id}', [GovernorateController::class, 'show']);
});
// governorates ///

/// setting ///
Route::group(['prefix' => 'Settings'], function () {

    Route::get('/settings', [SettingController::class, 'index']);
    Route::post('/setting', [SettingController::class, 'update']);
});
// setting ///


/// FAQ ///
Route::group(['prefix' => 'FAQ'], function () {

    Route::get('/faqs', [faqController::class, 'index']);
    Route::get('/faq/{id}', [faqController::class, 'show']);
    Route::post('/faqs', [faqController::class, 'store']);
    Route::put('/faq/{id}', [faqController::class, 'update']);
    Route::post('/faq/{id}', [faqController::class, 'destroy']);
});
// FAQ ///

/// writer ///
Route::group(['prefix' => 'writer'], function () {

    Route::get('/writers', [WriterController::class, 'index']);
    Route::get('/writer/{id}', [WriterController::class, 'show']);
    Route::post('/writers', [WriterController::class, 'store']);
    Route::put('/writer/{id}', [WriterController::class, 'update']);
    Route::post('/writer/{id}', [WriterController::class, 'destroy']);
});
// writer ///

/// writer ///
Route::group(['prefix' => 'vendors'], function () {

    Route::get('/vendors', [VendorController::class, 'index']);
    Route::get('/vendor/{id}', [VendorController::class, 'show']);
    Route::post('/vendors', [VendorController::class, 'store']);
    Route::put('/vendor/{id}', [VendorController::class, 'update']);
    Route::post('/vendor/{id}', [VendorController::class, 'destroy']);
});
// writer ///



/// Contact ///
Route::group(['prefix' => 'Contact'], function () {

    Route::get('/Contacts', [ContactController::class, 'index']);
    Route::get('/Contact/{id}', [ContactController::class, 'show']);
    Route::post('/Contacts', [ContactController::class, 'store']);
    Route::post('/Contact/{id}', [ContactController::class, 'destroy']);
});
// Contact ///


/// writer ///
Route::group(['prefix' => 'sections'], function () {

    Route::get('/sections', [SectionController::class, 'index']);
    Route::get('/section/{name_en}', [SectionController::class, 'show']);
    Route::post('/sections', [SectionController::class, 'store']);
    Route::put('/section/{id}', [SectionController::class, 'update']);
    Route::post('/section/{id}', [SectionController::class, 'destroy']);
});
// writer ///