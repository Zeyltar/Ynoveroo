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
    return view('landing');
});

Route::get('/home', function () {
    return redirect('/');
});

Route::get('/inscription', [\App\Http\Controllers\SignupController::class, 'clientForm']);
Route::post('/inscription', [\App\Http\Controllers\SignupController::class, 'clientProcess']);

Route::get('/inscription-restaurant', [\App\Http\Controllers\SignupController::class, 'restaurantForm']);
Route::post('/inscription-restaurant', [\App\Http\Controllers\SignupController::class, 'restaurantProcess']);

Route::get('/connexion', [\App\Http\Controllers\ConnectionController::class, 'form'])->name('login');
Route::post('/connexion', [\App\Http\Controllers\ConnectionController::class, 'process']);

Route::group([
    'middleware' => 'App\Http\Middleware\Authenticate',
], function () {
    Route::get('/deconnexion', [\App\Http\Controllers\ConnectionController::class, 'logout']);

    Route::view('/profil','profile');
    Route::post('/client/profil', [\App\Http\Controllers\ClientController::class, 'process']);


});

