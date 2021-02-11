<?php

use Illuminate\Support\Facades\Route;
use App\categories;
use App\products;
use App\User;

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

Route::get('/admin', 'admin@adminHome');
Route::prefix('admin')->group(function () {

    Route::resource('categories', 'adminCategoriesController');

    Route::resource('products', 'adminProductsController');

    Route::resource('users', 'adminUsersController');

});

//Route::get('Admin.editCategory', 'adminCategoriesController')->name('Admin.DeleteCategory');
Route::get('adminUsers','adminUsersController@index')->name('adminUsers');
Route::get('adminProducts','adminProductsController@index')->name('adminProducts');


//Route::post('adminLogin', 'admin@adminLogin')->name('adminLogin');
//Route::post('adminAdd', 'admin@adminRegister')->name('adminRegister');
//Route::prefix('admin/')->group(function(){
//        Route::resource('users', 'adminUsersController');
//        Route::resource('categories', 'adminCategoriesController');
//        Route::resource('Products', 'adminProductsController');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
