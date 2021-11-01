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

Route::group(['prefix' => 'admin'],function(){
    route::get('/dashboard','App\Http\Controllers\Backend\DashboardController@dashboard')->name('dashboard');
     //this routes are for employee management
     Route::group(['prefix' => '/employee'], function(){
        Route::get('/manage','App\Http\Controllers\Backend\EmployeesController@index')->name('employee.manage');
        Route::get('/create','App\Http\Controllers\Backend\EmployeesController@create')->name('employee.create');
        Route::post('/store','App\Http\Controllers\Backend\EmployeesController@store')->name('employee.store');
        Route::get('/edit/{id}','App\Http\Controllers\Backend\EmployeesController@edit')->name('employee.edit');
        Route::post('/update/{id}','App\Http\Controllers\Backend\EmployeesController@update')->name('employee.update');
        Route::post('/destroy/{id}','App\Http\Controllers\Backend\EmployeesController@destroy')->name('employee.destroy');
    });
});

route::get('/blank-page','App\Http\Controllers\Backend\DashboardController@blank')->name('blank');
