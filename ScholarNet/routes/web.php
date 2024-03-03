<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\homeController;
use App\Http\Controllers\UserController;
use \App\Http\Controllers\publicationController;
use App\Models\Publication;




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
Route::get('publications/addPublicaion',[publicationController::class,'create'])->name('publication.create')->middleware('auth');
Route::post('publications/storePublication',[publicationController::class,'store'])->name('publication.store')->middleware('auth');
Route::delete('publications/delete/{publication}',[publicationController::class,'destroy'])->name('publication.destroy')->middleware('auth');


Route::get('/login', [UserController::class, 'showLogin'])->name('showlogin');
Route::post('/login', [UserController::class, 'login'])->name('login');

Route::get('/adduser', [UserController::class, 'showadduser'])->name('adduser')->middleware('auth');
Route::post('/adduser', [UserController::class, 'adduser'])->name('adduser')->middleware('auth');
Route::get('/logout',[UserController::class,'logout'])->name('logout');
