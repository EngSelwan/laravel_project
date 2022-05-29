<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/*-------- offers--------- */
Route::group(['prefix' => 'offers'], function () {
    //   Route::get('store', 'CrudController@store');
    Route::get('create', [App\Http\Controllers\CrudController::class,'create']);
    Route::post('store', [App\Http\Controllers\CrudController::class,'store'])->name('offers.store');

    Route::get('edit/{offer_id}', [App\Http\Controllers\CrudController::class,'editOffer']);
    Route::post('update/{offer_id}',[App\Http\Controllers\CrudController::class,'UpdateOffe'])->name('offers.update');
    Route::get('delete/{offer_id}',[App\Http\Controllers\CrudController::class,'delete'])->name('offers.delete');
    Route::get('all',[App\Http\Controllers\CrudController::class,'getAllOffers'])->name('offers.all');

});