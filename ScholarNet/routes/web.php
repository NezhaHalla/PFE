<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\homeController;
use \App\Http\Controllers\publicationController;



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

Route::get('/',[homeController::class,'index'])->name('home');
Route::get('publications/addPublicaion',[publicationController::class,'create'])->name('publication.create');
Route::post('publications/storePublication',[publicationController::class,'store'])->name('publication.store');
Route::delete('publications/delete/{publications}',[publicationController::class,'destroy'])->name('publication.destroy');