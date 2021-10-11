<?php

use GuzzleHttp\Middleware;
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

Route::get('/bot',[\App\Http\Controllers\BotController::class, 'bot'])->middleware('verifybot');
Route::post('/bot',[\App\Http\Controllers\BotController::class, 'bot']);
Route::namespace('App\Http\Controllers')->group(function () {
    // Route::get('/', 'TestController@index')->name('test/index');
    Route::get('/', 'HomeController@index')->name('home.index');
    Route::get('service', 'ServiceController@service')->name('service.index');
    Route::get('company', 'CompanyController@index')->name('company.index');
    Route::get('recruitment', 'RecruitmentController@recruitment')->name('recruitment.index');
});
