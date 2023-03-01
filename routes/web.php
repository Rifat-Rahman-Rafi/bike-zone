<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Productcontroller;
use App\Http\Controllers\Yamahacontroller;

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

Route::get('/', function () {
    return view('welcome');
});
Route::view('add','addproducts');
Route::post('add',[Productcontroller::class,'addData']);

// Route::get('delete',[Productcontroller::class,'addData']);

// Route::get('list',[Productcontroller::class,'show']);
Route::get('',[Productcontroller::class,'show']);

 Route::get('delete',[Productcontroller::class,'delete']);
 Route::get('deleteProducts/{id}',[Productcontroller::class,'deleteProducts']);
 Route::get('edit/{id}',[Productcontroller::class,'showProducts']);
 Route::post('edit',[Productcontroller::class,'update']);
//  Route::get('details/{id}',[Productcontroller::class,'detailsProducts']);
  Route::get('details/{id}',[Productcontroller::class,'showDetails']);
