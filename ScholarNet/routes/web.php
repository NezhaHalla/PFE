<?php

use App\Models\Publication;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\UserController;
use \App\Http\Controllers\homeController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\ResourceController;
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
Route::get('publications/addPublicaion',[publicationController::class,'create'])->name('publication.create')->middleware('auth');
Route::post('publications/storePublication',[publicationController::class,'store'])->name('publication.store')->middleware('auth');
Route::delete('publications/delete/{publication}',[publicationController::class,'destroy'])->name('publication.destroy')->middleware('auth');

Route::get('/myAccount',[UserController::class,'showprofile'])->name('profile')->middleware('auth');

Route::get('/login', [UserController::class, 'showLogin'])->name('showlogin');
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::get('/myAccount/modifyPassword', [UserController::class, 'showpass'])->name('password.show')->middleware('auth');;
Route::post('/myAccount/modifyPassword/{user}', [UserController::class, 'storepass'])->name('password.update')->middleware('auth');;



Route::get('/adduser', [UserController::class, 'showadduser'])->name('adduser');
Route::post('/adduser', [UserController::class, 'adduser'])->name('adduser')->middleware('auth');
Route::get('/logout',[UserController::class,'logout'])->name('logout');

Route::get('/all-classes', [ClassController::class, 'showAllClasses'])->name('all_classes')->middleware('auth');
Route::get('/all-teachers', [UserController::class, 'showAllTeachers'])->name('all.teachers')->middleware('auth');
Route::get('/classes/{class_id}/students', [UserController::class, 'showAllStudents'])->name('showAllStudents')->middleware('auth');


Route::get('/user/{id}/delete', [UserController::class, 'delete'])->name('user.delete');
Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::post('/user/update/{id}', [UserController::class, 'update'])->name('editprofile');


Route::get('/addclass', [ClassController::class, 'create'])->name('class.create')->middleware('auth');
Route::post('/addclass', [ClassController::class, 'store'])->name('class.store')->middleware('auth');

Route::get('/MyCourses',[ResourceController::class,'index'])->name('myCourses');

Route::get('/Myclass/{studentId}', [UserController::class, 'showmyclass'])->name('Myclasse')->middleware('auth');
Route::get('/teacher/classes/{teacherId}', [UserController::class, 'showTeacherClasses'])->name('Myclass')->middleware('auth');

Route::get('/Student/MyCourses',[ResourceController::class,'index'])->name('myCourses');
Route::get('/Teacher/MyCourses',[ResourceController::class,'show'])->name('MyCourses');
Route::get('/Cours/{resource}/details',[ResourceController::class,'showDetails'])->name('showDetails');
Route::get('/{user}/profile',[UserController::class,'show'])->name('showProfile');

Route::get('/resource/add', [ResourceController::class, 'showAddResourceForm'])->name('add_resource_form');
Route::post('/resource/add', [ResourceController::class, 'store'])->name('store_resource');




Route::get('/{resource}/downloads',[ResourceController::class,'downloads'])->name('downloads');
Route::get('/ShowDocuments/{resource}',[ResourceController::class,'showdoc'])->name('showdoc');

Route::get('/forgetPassword',[UserController::class,'showEmailPage'])->name('emailPage');
Route::post('/forgetPassword',[UserController::class,'showEmailPageVerify'])->name('emailPageVerify');


Route::get('/verifyEmail',[UserController::class,'showVerifyEmail'])->name('verifyEmail');
Route::post('/verifyEmail',[UserController::class,'verifyEmail'])->name('verify');


Route::get('/newPassword',[UserController::class,'showNewPassword'])->name('newPassword');
Route::post('/newPassword',[UserController::class,'newPassword'])->name('newPasswordConf');

Route::delete('/delete/{resource}',[ResourceController::class,'destroy'])->name('course.destroy')->middleware('auth');

Route::get('/courses/search', [ResourceController::class, 'searchCourses'])->name('searchCourses');
Route::get('/courses/Teacher/search', [ResourceController::class, 'searchCoursesT'])->name('searchCoursesT');
Route::get('/about',function(){return view('homepage/about');})->name('about');
Route::get('/contact',function(){return view('homepage/contact');})->name('contact');
Route::get('/details/{publication}',[publicationController::class,'show'])->name("pub.details");