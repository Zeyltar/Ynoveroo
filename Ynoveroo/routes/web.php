<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ConnectionController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\SignupController;
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
    $user = auth()->user();

    return view('landing',[
        'user' => $user,
    ]);
});

Route::get('/home', function () {
    return redirect('/');
});

Route::get('/inscription', [SignupController::class, 'clientForm']);
Route::post('/inscription', [SignupController::class, 'clientProcess']);

Route::get('/inscription-restaurant', [SignupController::class, 'restaurantForm']);
Route::post('/inscription-restaurant', [SignupController::class, 'restaurantProcess']);

Route::get('/connexion', [ConnectionController::class, 'form'])->name('login');
Route::post('/connexion', [ConnectionController::class, 'process']);

Route::get('/image/{id}', [\App\Http\Controllers\ImageController::class, 'imagePath'])->name('image.path');

Route::group([
    'middleware' => 'App\Http\Middleware\Authenticate',
], function () {
    Route::get('/deconnexion', [ConnectionController::class, 'logout']);

    Route::get('/profil', function () {
        $user = auth()->user();

        return view('profile',[
            'user' => $user,
        ]);
    });
    Route::post('/clientProfileUpdate', [ClientController::class, 'process']);
    Route::post('/restaurantProfileUpdate', [RestaurantController::class, 'process']);

    Route::get('/restaurants', [RestaurantController::class, 'list']);

});

