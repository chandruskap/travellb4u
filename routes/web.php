<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    HomeController,   
};

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


Route::get('/',[HomeController::class, 'index'])->name('index');
Route::get('index',[HomeController::class, 'index'])->name('index');
Route::get('hotel',[HomeController::class, 'hotel'])->name('hotel');
Route::get('fights',[HomeController::class, 'fights'])->name('fights');
Route::get('contact-us',[HomeController::class, 'contact'])->name('contact-us');
Route::get('gifting',[HomeController::class, 'gifting'])->name('gifting');
Route::get('holidays',[HomeController::class, 'holidays'])->name('holidays'); 
