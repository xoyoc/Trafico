<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','TraficoController@inicio');
Route::get('Crear_Factura','TraficoController@create');
Route::post('Crear_Factura','TraficoController@store');
Route::get('Todas_Facturas','TraficoController@index');
Route::get('Factura/{id}','TraficoController@show')->where(['id' => '[0-9]+']);

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
