<?php

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
use Illuminate\Http\Request;

header('Access-Control-Allow-Origin: *');
//Access-Control-Allow-Origin: *
header('Access-Control-Allow-Methods:  POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Origin, Authorization');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/phpinfo', function() { phpinfo(); });
Route::get('/config/{id}', 'ConfigController@get')->name('config.get');
Route::post('/config/{id}', 'ConfigController@update')->name('config.update');
Route::get('/config', 'ConfigController@all')->name('config.all');


Route::get('/plants', 'PlantController@all')->name('plants.all');

Route::post('/plants/', 'PlantController@store')->name('plants.store');
Route::post('/plants/update', 'PlantController@statusUpdate')->name('plants.statusUpdate');
