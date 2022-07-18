<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Productcontroller;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/product',[Productcontroller::class,'create']);
Route::get('/products',[Productcontroller::class,'show']);
Route::get('/product/{id}',[Productcontroller::class,'showbyid']);
Route::put('/productupdate/{id}',[Productcontroller::class,'updatebyid']);
Route::delete('/productdelete/{id}',[Productcontroller::class,'destroy']);
