<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     // return view('welcome');
// });


// Route::get('/{id?}', function () {
//     return "<h1>Hello world</h1>";
// });

Route::get('/', "App\Http\Controllers\AppController@index")->name('index');

Route::get('/showBroker', "App\Http\Controllers\AppController@showBroker")->name('showBroker');

Route::get('/editBroker/{id}', "App\Http\Controllers\AppController@editBroker")->name('editBroker');

Route::post('/insertBroker', "App\Http\Controllers\AppController@insertBroker")->name('insertBroker');

Route::put('/updateBroker/{id}', "App\Http\Controllers\AppController@updateBroker")->name('updateBroker');

Route::delete('/deleteBroker/{id}', "App\Http\Controllers\AppController@deleteBroker")->name('deleteBroker');

Route::get('/addBroker', "App\Http\Controllers\AppController@addBroker")->name('addBroker');


