<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\empcontroller;
Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('/regi',[empcontroller::class,'openRegi']);
Route::get('/disp',[empcontroller::class,'dispAlldata'])->name('display');
Route::get('/delete/{id}',[empcontroller::class,'DeleteData']);
Route::get('/edit/{id}',[empcontroller::class,'DispUpdateData']);
Route::post('/store',[empcontroller::class,'store']);
Route::post('/update',[empcontroller::class,'update']);
Route::post('/login',[empcontroller::class,'Logincheck']);
