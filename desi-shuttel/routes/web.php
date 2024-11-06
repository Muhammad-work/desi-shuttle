<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\driverController;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('UserForm',function(){
  return view('userinfo');
})->name('userInfo');

Route::post('sendmail',[driverController::class,'sendEmail'])->name('sendmail');