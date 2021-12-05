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
    Route::group(['prefix' => '/supplier'], function(){
        Route::get('/manage','App\Http\Controllers\Backend\SuppliersController@index')->name('supplier.manage');
        Route::get('/create','App\Http\Controllers\Backend\SuppliersController@create')->name('supplier.create');
        Route::post('/store','App\Http\Controllers\Backend\SuppliersController@store')->name('supplier.store');
        Route::get('/edit/{id}','App\Http\Controllers\Backend\SuppliersController@edit')->name('supplier.edit');
        Route::post('/update/{id}','App\Http\Controllers\Backend\SuppliersController@update')->name('supplier.update');
        Route::post('/destroy/{id}','App\Http\Controllers\Backend\SuppliersController@destroy')->name('supplier.destroy');
    });
    Route::group(['prefix' => '/category'], function(){
        Route::get('/manage','App\Http\Controllers\Backend\CategoryController@index')->name('category.manage');
        Route::get('/create','App\Http\Controllers\Backend\CategoryController@create')->name('category.create');
        Route::post('/store','App\Http\Controllers\Backend\CategoryController@store')->name('category.store');
        Route::get('/edit/{id}','App\Http\Controllers\Backend\CategoryController@edit')->name('category.edit');
        Route::post('/update/{id}','App\Http\Controllers\Backend\CategoryController@update')->name('category.update');
        Route::post('/destroy/{id}','App\Http\Controllers\Backend\CategoryController@destroy')->name('category.destroy');
    });
    Route::group(['prefix' => '/brand'], function(){
        Route::get('/manage','App\Http\Controllers\Backend\BrandController@index')->name('brand.manage');
        Route::get('/create','App\Http\Controllers\Backend\BrandController@create')->name('brand.create');
        Route::post('/store','App\Http\Controllers\Backend\BrandController@store')->name('brand.store');
        Route::get('/edit/{id}','App\Http\Controllers\Backend\BrandController@edit')->name('brand.edit');
        Route::post('/update/{id}','App\Http\Controllers\Backend\BrandController@update')->name('brand.update');
        Route::post('/destroy/{id}','App\Http\Controllers\Backend\BrandController@destroy')->name('brand.destroy');
    });
    Route::group(['prefix' => '/promotion'], function(){
        Route::get('/manage','App\Http\Controllers\Backend\PromotionController@index')->name('promotion.manage');
        Route::get('/create','App\Http\Controllers\Backend\PromotionController@create')->name('promotion.create');
        Route::post('/store','App\Http\Controllers\Backend\PromotionController@store')->name('promotion.store');
        Route::get('/edit/{id}','App\Http\Controllers\Backend\PromotionController@edit')->name('promotion.edit');
        Route::post('/update/{id}','App\Http\Controllers\Backend\PromotionController@update')->name('promotion.update');
        Route::post('/destroy/{id}','App\Http\Controllers\Backend\PromotionController@destroy')->name('promotion.destroy');
    });
});

route::get('/blank-page','App\Http\Controllers\Backend\DashboardController@blank')->name('blank');
