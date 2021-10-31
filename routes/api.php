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


Route::group(['middleware' => 'admin'], function () {
	Route::get('/admin', 'API\AuthController@onlyAdmins');
});


Route::post('/login', ['as' => 'login', 'uses' => 'API\AuthController@login']);
Route::post('/check', 'API\AuthController@check');
// Route::post('/register', ['as' => 'register', 'uses' => 'API\AuthController@register']);
Route::post('logout', 'API\AuthController@logout');
Route::post('refresh', 'API\AuthController@refresh');



