<?php

use App\Models\Publication;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\UserController;
use \App\Http\Controllers\homeController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ResourceController;
use \App\Http\Controllers\AssignmentController;
use \App\Http\Controllers\publicationController;
use App\Http\Controllers\AssignmentSubmissionsController;
use App\Http\Controllers\SoumestreController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\YearController;

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
Route::get('/bar',[homeController::class,'showbar'])->name('showbar')->middleware('auth');
Route::get('publications/addPublicaion',[publicationController::class,'create'])->name('publication.create')->middleware('auth','admin');
Route::post('publications/storePublication',[publicationController::class,'store'])->name('publication.store')->middleware('auth','admin');
Route::delete('publications/delete/{publication}',[publicationController::class,'destroy'])->name('publication.destroy')->middleware('auth','admin');

Route::get('/myAccount',[UserController::class,'showprofile'])->name('profile')->middleware('auth');

Route::get('/login', [UserController::class, 'showLogin'])->name('showlogin')->middleware('guest');
Route::post('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::get('/myAccount/modifyPassword', [UserController::class, 'showpass'])->name('password.show')->middleware('auth');;
Route::post('/myAccount/modifyPassword/{user}', [UserController::class, 'storepass'])->name('password.update')->middleware('auth');;



Route::get('/adduser', [UserController::class, 'showadduser'])->name('adduser')->middleware('auth','admin');
Route::post('/adduser', [UserController::class, 'adduser'])->name('adduser')->middleware('auth','admin');
Route::get('/logout',[UserController::class,'logout'])->name('logout')->middleware('auth');

Route::get('/all-classes', [ClassController::class, 'showAllClasses'])->name('all_classes')->middleware('auth','admin');
Route::get('/all-teachers', [UserController::class, 'showAllTeachers'])->name('all.teachers')->middleware('auth','admin');
Route::get('/classes/{class_id}/students', [UserController::class, 'showAllStudents'])->name('showAllStudents')->middleware('auth');


Route::get('/user/{id}/delete', [UserController::class, 'delete'])->name('user.delete')->middleware('auth');
Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit')->middleware('auth');
Route::post('/user/update/{id}', [UserController::class, 'update'])->name('editprofile')->middleware('auth');


Route::get('/addclass', [ClassController::class, 'create'])->name('class.create')->middleware('auth');
Route::post('/addclass', [ClassController::class, 'store'])->name('class.store')->middleware('auth');

Route::get('/MyCourses',[ResourceController::class,'index'])->name('myCourses')->middleware('auth');

Route::get('/Myclass/{studentId}', [UserController::class, 'showmyclass'])->name('Myclasse')->middleware('auth');
Route::get('/teacher/classes/{teacherId}', [UserController::class, 'showTeacherClasses'])->name('Myclass')->middleware('auth');

Route::get('/Student/MyCourses',[ResourceController::class,'index'])->name('myCourses')->middleware('auth');
Route::get('/Teacher/MyCourses',[ResourceController::class,'show'])->name('MyCourses')->middleware('auth');
Route::get('/Cours/{resource}/details',[ResourceController::class,'showDetails'])->name('showDetails')->middleware('auth');
Route::get('/{user}/profile',[UserController::class,'show'])->name('showProfile')->middleware('auth');

Route::get('/resource/add', [ResourceController::class, 'showAddResourceForm'])->name('add_resource_form')->middleware('auth');
Route::post('/resource/add', [ResourceController::class, 'store'])->name('store_resource')->middleware('auth');




Route::get('/{resource}/downloads',[ResourceController::class,'downloads'])->name('downloads')->middleware('auth');
Route::get('/ShowDocuments/{resource}',[ResourceController::class,'showdoc'])->name('showdoc')->middleware('auth');

Route::get('/forgetPassword',[UserController::class,'showEmailPage'])->name('emailPage')->middleware('guest');
Route::post('/forgetPassword',[UserController::class,'showEmailPageVerify'])->name('emailPageVerify')->middleware('guest');


Route::get('/verifyEmail',[UserController::class,'showVerifyEmail'])->name('verifyEmail')->middleware('guest');
Route::post('/verifyEmail',[UserController::class,'verifyEmail'])->name('verify')->middleware('guest');


Route::get('/newPassword',[UserController::class,'showNewPassword'])->name('newPassword')->middleware('guest');
Route::post('/newPassword',[UserController::class,'newPassword'])->name('newPasswordConf')->middleware('guest');

Route::delete('/delete/{resource}',[ResourceController::class,'destroy'])->name('course.destroy')->middleware('auth');

Route::get('/courses/search', [ResourceController::class, 'searchCourses'])->name('searchCourses')->middleware('auth');
Route::get('/courses/Teacher/search', [ResourceController::class, 'searchCoursesT'])->name('searchCoursesT')->middleware('auth');

Route::get('/about',function(){return view('homepage/about');})->name('about');

Route::get('/contact',function(){return view('homepage/contact');})->name('contact');

Route::get('/details/{publication}',[publicationController::class,'show'])->name("pub.details");


Route::get('/teacher/assignments', [AssignmentController::class, 'Assignmentteacher'])->name('Assignmentt')->middleware('auth');
Route::get('/assignments', [AssignmentController::class, 'Assignmentstudent'])->name('Assignments')->middleware('auth');

Route::get('/assignments/create', [AssignmentController::class, 'createt'])->name('assignmentscreate')->middleware('auth');
Route::post('/assignments', [AssignmentController::class, 'storet'])->name('assignmentsstore')->middleware('auth');
Route::get('/assignments/{assignment}', [AssignmentController::class, 'show'])->name('assignments.show')->middleware('auth');
Route::delete('/assignments/{assignment}', [AssignmentController::class, 'destroy'])->name('assignments.destroy')->middleware('auth');



Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index')->middleware('auth');
Route::get('/contacts/{id}', [ContactController::class, 'show'])->name('contacts.show')->middleware('auth');

Route::get('/assignmentS/search', [AssignmentController::class, 'searchAssignment'])->name('searchAssignment')->middleware('auth');
Route::get('/assignmentT/search', [AssignmentController::class, 'searchAssignmentT'])->name('searchAssignmentT')->middleware('auth');


Route::get('/Assignment/{assignment}/details',[AssignmentController::class,'showDetails'])->name('assignment.showDetails')->middleware('auth');


Route::get('/ShowDocuments/{assignment}',[AssignmentController::class,'showdoc'])->name('showdocA')->middleware('auth');
Route::get('/Assignment/{assignment}/submit',[AssignmentSubmissionsController::class,'create'])->name('studentsubass')->middleware('auth');

Route::post('/Assignment/{assignment}/store',[AssignmentSubmissionsController::class,'store'])->name('exercice.store')->middleware('auth');
Route::get('/MySubmittedAssignments',[AssignmentSubmissionsController::class,'index'])->name('exercice.index')->middleware('auth');
Route::get('/MySubmittedAssignment/destroy/{exercice1}',[AssignmentSubmissionsController::class,'destroy'])->name('exercice.destroy')->middleware('auth');
Route::get('/MySubmittedAssignment/download/{exercice}',[AssignmentSubmissionsController::class,'download'])->name('exercice.download')->middleware('auth');

Route::get('/assignmentS/search', [AssignmentController::class, 'searchAssignment'])->name('searchAssignment')->middleware('auth');
Route::get('/assignmentT/search', [AssignmentController::class, 'searchAssignmentT'])->name('searchAssignmentT')->middleware('auth');


Route::get('/Assignment/{assignment}/details',[AssignmentController::class,'showDetails'])->name('assignment.showDetails')->middleware('auth');


Route::get('/ShowDocuments/{assignment}',[AssignmentController::class,'showdoc'])->name('showdocA')->middleware('auth');
Route::get('/Assignment/{assignment}/submit',[AssignmentSubmissionsController::class,'create'])->name('studentsubass')->middleware('auth');


Route::post('/Assignment/{assignment}/store',[AssignmentSubmissionsController::class,'store'])->name('exercice.store')->middleware('auth');
Route::get('/MySubmittedAssignments',[AssignmentSubmissionsController::class,'index'])->name('exercice.index')->middleware('auth');

Route::get('/assignments/{assignment}/submissions', [AssignmentSubmissionsController::class,'submissions'])->name('assignment.submissions')->middleware('auth');
Route::put('/assignment-student/{assignment_id}/{student_id}/update-note', [AssignmentSubmissionsController::class, 'updateNote'])->name('update_note')->middleware('auth');

Route::get('/student/notesomesstre', [SoumestreController::class, 'showStudentNotesS'])->name('notesS')->middleware('auth');
Route::get('/Student/Module',[ModuleController::class,'index'])->name('module')->middleware('auth');

Route::get('/student/Year', [YearController::class, 'showStudentNotesY'])->name('year')->middleware('auth');
Route::get('/Student/Module/{module}/details',[ModuleController::class,'show'])->name('module.detail')->middleware('auth');
