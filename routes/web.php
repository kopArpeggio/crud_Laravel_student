<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
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

Route::get('/manage', [StudentController::class , 'index'] );
Route::get('/addstudent',[StudentController::class , 'CreateStudent']);
Route::post('/insertstudent',[StudentController::class, 'InsertStudent']);
Route::get('/edit/{id}',[StudentController::class, 'Edit']);
Route::post('/update/{id}',[StudentController::class,'Update']);
Route::get('delete/{id}',[StudentController::class, 'Delete']);
Route::get('getapi',[UserController::class,'test']);