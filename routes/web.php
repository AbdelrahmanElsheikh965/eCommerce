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

Auth::routes();

Route::get('/addToCart/{u_id}/{p_id}','HomeController@add')->name('user.add');
Route::resource('/home', 'userController');


Route::get('find/{id}/user', function ($id){
    $product = User::find($id)->product;
    return $product;
});

Route::get('find/{id}/pro', function ($id){
    $user = products::find($id)->user;
    return $user;
});
