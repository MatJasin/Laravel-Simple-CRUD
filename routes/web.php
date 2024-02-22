<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ClassController;


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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/student/user', [StudentController::class, 'user'])->name('student.user');
Route::post('/student/user/store', [StudentController::class, 'userstore'])->name('user.store');


Route::get('/student', [StudentController::class, 'index'])->name('student.index');
Route::get('/student/create', [StudentController::class, 'create'])->name('student.create');
Route::post('/student', [StudentController::class, 'store'])->name('student.store');
Route::get('/student/{user}/edit', [StudentController::class, 'edit'])->name('student.edit');
Route::put('/student/{user}/update', [StudentController::class, 'update'])->name('student.update');
Route::delete('/student/{user}/destroy', [StudentController::class, 'destroy'])->name('student.destroy');


Route::get('/car', [CarController::class, 'index'])->name('car.index');
Route::get('/car/create', [CarController::class, 'create'])->name('car.create');
Route::post('/car', [CarController::class, 'store'])->name('car.store');
Route::get('/car/{car}/edit', [CarController::class, 'edit'])->name('car.edit');
Route::put('/car/{car}/update', [CarController::class, 'update'])->name('car.update');
Route::delete('/car/{car}/destroy', [CarController::class, 'destroy'])->name('car.destroy');



Route::get('/subject', [SubjectController::class, 'index'])->name('subject.index');
Route::get('/subject/create', [SubjectController::class, 'create'])->name('subject.create');
Route::post('/subject', [SubjectController::class, 'store'])->name('subject.store');
Route::get('/subject/{subject}/edit', [SubjectController::class, 'edit'])->name('subject.edit');
Route::put('/subject/{subject}/update', [SubjectController::class, 'update'])->name('subject.update');
Route::delete('/subject/{subject}/destroy', [SubjectController::class, 'destroy'])->name('subject.destroy');

Route::get('/class', [ClassController::class, 'index'])->name('class.index');
Route::get('/class/create', [ClassController::class, 'create'])->name('class.create');
Route::post('/class', [ClassController::class, 'store'])->name('class.store');
