<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AboutController;

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



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/homep',[HomeController::class,'homep']);

Route::get('/redirect',[HomeController::class,'redirect']);

Route::get('/',[HomeController::class,'index']);

Route::get('/product',[AdminController::class,'product']);

Route::post('/uploadproduct',[AdminController::class,'uploadproduct']);

Route::get('/showproduct',[AdminController::class,'showproduct']);

Route::get('/deleteproduct/{id}',[AdminController::class,'deleteproduct']);

Route::get('/updateview/{id}',[AdminController::class,'updateview']);

Route::post('/updateproduct/{id}',[AdminController::class,'updateproduct']);

Route::get('/search',[HomeController::class,'search']);

Route::post('/addcart/{id}',[HomeController::class,'addcart']);

Route::get('/showcart',[HomeController::class,'showcart']);

Route::get('/delete/{id}',[HomeController::class,'deletecart']);

Route::post('/order',[HomeController::class,'conforder']);

Route::get('/showorder',[AdminController::class,'showorder']);

Route::get('/updatestatus/{id}',[AdminController::class,'updatestatus']);

Route::get('/productpage',[ProductController::class,'productpage']);

Route::get('/about',[AboutController::class,'about']);

Route::get('/about-view',[AdminController::class,'aboutView'])->name('adabout.view');
Route::post('/aboutus',[AdminController::class,'aboutus'])->name('adabout');


Route::get('/aboutuser',[HomeController::class,'aboutuser'])->name('userabout');


Route::get('/contact',[HomeController::class,'contact'])->name('contactus');
