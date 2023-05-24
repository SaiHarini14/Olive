<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Favourite1Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::view('create','main');
Route::get('create',[Favourite1Controller::class,'show']);
Route::post('create',[Favourite1Controller::class,'store']);
Route::delete('delete/{id}',[Favourite1Controller::class,'destroy']);
Route::get('update/{id}',[Favourite1Controller::class,'showData']);
Route::put('update/{id}',[Favourite1Controller::class,'update']);
