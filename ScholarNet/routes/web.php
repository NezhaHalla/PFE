<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\homeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClassController;
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

Route::get('/myAccount',[UserController::class,'showprofile'])->name('profile')->middleware('auth');;

Route::get('/login', [UserController::class, 'showLogin'])->name('showlogin');
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::get('/myAccount/modifyPassword', [UserController::class, 'showpass'])->name('password.show')->middleware('auth');;
Route::post('/myAccount/modifyPassword/{user}', [UserController::class, 'storepass'])->name('password.update')->middleware('auth');;



Route::get('/adduser', [UserController::class, 'showadduser'])->name('adduser')->middleware('auth');
Route::post('/adduser', [UserController::class, 'adduser'])->name('adduser')->middleware('auth');
Route::get('/logout',[UserController::class,'logout'])->name('logout');

Route::get('/all-classes', [ClassController::class, 'showAllClasses'])->name('all_classes');
Route::get('/all-teachers', [UserController::class, 'showAllTeachers'])->name('all.teachers');
Route::get('/classes/{class_id}/students', [UserController::class, 'showAllStudents'])->name('showAllStudents');


Route::get('/user/{id}/delete', [UserController::class, 'delete'])->name('user.delete');
Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');


Route::get('/addclass', [ClassController::class, 'create'])->name('class.create');
Route::post('/addclass', [ClassController::class, 'store'])->name('class.store');
