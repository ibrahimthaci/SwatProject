<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LectureController;
use App\Http\Controllers\StudentController;

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

Route::get('/indexLecture',[LectureController::class,'indexLecture']);
Route::get('/createLecture',[LectureController::class,'createLecture']);
Route::get('/storeLecture',[LectureController::class,'storeLecture']);
Route::get('/showLecture',[LectureController::class,'showLecture']);
Route::get('/editLecture',[LectureController::class,'editLecture']);
Route::get('/updateLecture',[LectureController::class,'updateLecture']);
Route::get('/destroyLecture',[LectureController::class,'destroyLecture']);


Route::get('/indexStudent',[StudentController::class,'indexStudent']);
Route::get('/createStudent',[StudentController::class,'createStudent']);
Route::get('/storeStudent',[StudentController::class,'storeStudent']);
Route::get('/showStudent',[StudentController::class,'showStudent']);
Route::get('/editStudent',[StudentController::class,'editStudent']);
Route::get('/updateStudent',[StudentController::class,'updateStudent']);
Route::get('/destroyStudent',[StudentController::class,'destroyStudent']);





