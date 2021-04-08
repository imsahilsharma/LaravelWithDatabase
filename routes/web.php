<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CollegeBusController;
use App\Http\Controllers\BooksController;

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

Route::get('/',[FacultyController::class,'create']);
Route::get('/student',[StudentController::class,'create']);
Route::get('/bus',[CollegeBusController::class,'create']);
Route::get('/books',[BooksController::class,'create']);

Route::post('/facultyread',[FacultyController::class,'store']);
Route::post('/studentread',[StudentController::class,'store']);
Route::post('/collegebusread',[CollegeBusController::class,'store']);
Route::post('/booksread',[BooksController::class,'store']);