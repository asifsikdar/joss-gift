<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();

});
Route::group(['middleware' => ['auth']], function () {
    Route::get('/category', 'CategoryController@index')->name('category.index')-> middleware('is_admin');
    Route::post('/category/store', 'CategoryController@store')-> middleware('is_admin');
    Route::post('/category/update/{id}', 'CategoryController@update')->name('cat.update')-> middleware('is_admin');
    Route::get('/category_delete/{id}', 'CategoryController@destroy')-> middleware('is_admin');
    Route::apiResource('/index', 'HomeController')-> middleware('is_admin');
    Route::post('/subcategory/store', 'SubCategoryController@store')-> middleware('is_admin');
});

