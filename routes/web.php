<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\requestcontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',[requestcontroller::class,'index']);
Route::get('/app',[requestcontroller::class,'app']);
Route::post('/app',[requestcontroller::class,'displayData']);