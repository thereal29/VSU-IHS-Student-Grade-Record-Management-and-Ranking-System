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

Route::get('/', function () {
    return view('welcome');
});
//Route::get('/', 'App\Http\Controllers\Admin\UserController@index');

Auth::routes();

//SYSTEM ADMINISTRATOR ROUTES
Route::middleware(['auth', 'user-role:Administrator'])->group(function()
{
    Route::get('/admin/dashboard', 'App\Http\Controllers\Admin\DashboardController@index')->name('admin.dashboard');
    Route::get('/admin/profile', 'App\Http\Controllers\Admin\ProfileController@index')->name('admin.profile');
    Route::get('/admin/curriculum', 'App\Http\Controllers\Admin\CurriculumController@index')->name('admin.curriculum');
    Route::post('/admin/curriculum', 'App\Http\Controllers\Admin\CurriculumController@addCurriculum')->name('admin.curriculum');
  //  Route::post('/admin/curriculum/add', 'App\Http\Controllers\Admin\CurriculumController@index')->name('admin.curriculum');
    Route::get('/admin/academicrecord', 'App\Http\Controllers\Admin\RecordController@index')->name('admin.academic_record');
    Route::get('/admin/report', 'App\Http\Controllers\Admin\ReportController@maincontent')->name('admin.honor_roll_reports');
    Route::get('/admin/characterevaluation', 'App\Http\Controllers\Admin\EvaluationController@maincontent')->name('admin.character_evaluation');
    Route::get('/admin/userlist', 'App\Http\Controllers\Admin\UserController@filterRoles')->name('admin.users_list');
    Route::get('/admin/logs', 'App\Http\Controllers\Admin\LogsController@maincontent')->name('admin.users_logs');
    Route::get('/admin/maintenance', 'App\Http\Controllers\Admin\MaintenanceController@maincontent')->name('admin.maintenance');
   // Route::get('/admin/filter', 'App\Http\Controllers\Admin\UserController@filterRoles')->name('admin.filter');
    
});
//NON-GRADUATING JUNIOR HIGH SCHOOL STUDENTS ROUTES
Route::middleware(['auth', 'user-role:Non-graduating Junior High School'])->group(function()
{
    Route::get('/stud1/dashboard', 'App\Http\Controllers\Stud1\DashboardController@index')->name('stud1.dashboard');
    Route::get('/stud1/profile', 'App\Http\Controllers\Stud1\ProfileController@index')->name('stud1.profile');
});
