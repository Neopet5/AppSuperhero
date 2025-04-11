<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UniApi;
use App\Http\Controllers\GenApi;
use App\Http\Controllers\SupApi;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/uniapi',[UniApi::class,'index']);
Route::get('/uniapi/{name}',[UniApi::class,'show']);

Route::get('/genapi',[GenApi::class,'index']);
Route::get('/genapi/{name}',[GenApi::class,'show']);

Route::get('/supapi',[SupApi::class,'index']);
Route::get('/supapi/{name}',[SupApi::class,'show']);