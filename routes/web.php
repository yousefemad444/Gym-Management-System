<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes(['register'=>false]);


Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => [ 'auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function(){

    Route::group(['middleware'=>'admin'],function (){
        Route::resource('users',\App\Http\Controllers\Admin\UsersController::class)->except('show');
    });
    Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('profile',[\App\Http\Controllers\ProfileController::class,'edit'])->name('profile.edit');
    Route::put('profile',[\App\Http\Controllers\ProfileController::class,'update'])->name('profile.update');
    Route::put('profile/password',[\App\Http\Controllers\ProfileController::class,'updatePassword'])->name('profile.updatePassword');

    Route::post('customers/{customer}/image',[\App\Http\Controllers\CustomersController::class,'uploadImage'])->name('customers.uploadImage');
    Route::get('customers/{customer}/image',[\App\Http\Controllers\CustomersController::class,'deleteImage'])->name('customers.deleteImage');
    Route::resource('customers',\App\Http\Controllers\CustomersController::class);

});


