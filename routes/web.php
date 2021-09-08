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

Route::get('/', 'HomeController@homepage')->name('home-page');

Route::get('/travels', 'TravelsController@travelspage')->name('travels-page');
Route::get('/travelsDetails/{id}', 'TravelsController@details')->name('details-page');
