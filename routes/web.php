<?php

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

Route::get('/', 'StudentManage@allStudentData');
Route::get('add_new_student','StudentManage@addNewStudent');
Route::get('view_single_student/{id}','StudentManage@viewStudent');
Route::get('delete_student/{id}','StudentManage@deleteStudent');
Route::get('edit_student/{id}','StudentManage@editStudent');
Route::post('update-student/{id}','StudentManage@updateStudent');

Route::post('add-new-student-data','StudentManage@dataSave');




