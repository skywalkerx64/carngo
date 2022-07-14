<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin_controller;
use App\Http\Controllers\Index_controller;
use App\Http\Controllers\Voiture_controller;
use App\Http\Controllers\Location_controller;

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

Route::get('/',[Index_controller::class, 'home']);

/* Voitures */
Route::get('voitures',[Voiture_controller::class, 'voitures']);
Route::get('voiture/add',[Voiture_controller::class, 'add_form']);
Route::post('voiture/add',[Voiture_controller::class, 'add']);
Route::get('voiture/{id}/edit',[Voiture_controller::class, 'edit_form']);
Route::post('voiture/edit',[Voiture_controller::class, 'edit']);
Route::get('voiture/{id}/delete',[Voiture_controller::class, 'delete']);
Route::get('voiture/{id}',[Voiture_controller::class, 'voiture']);

/* Location */
Route::get('locations',[Location_controller::class, 'locations'])->middleware('auth');
Route::get('location/{id}',[Location_controller::class, 'location'])->middleware('auth');
Route::get('voiture/{id}/reserver',[Location_controller::class, 'location_form'])->middleware('auth');
Route::get('location/{id}/resilier',[Location_controller::class, 'resiliate'])->middleware('auth');
Route::post('voiture/reserver',[Location_controller::class, 'location_store'])->middleware('auth');
/* Administration */
Route::get('/admin',[Admin_controller::class, 'admin']);
require __DIR__.'/auth.php';
