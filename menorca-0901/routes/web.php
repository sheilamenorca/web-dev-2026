<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\ComputeController;


Route::get('/', [CreateController::class, 'welcome']);
Route::get('/sample', [CreateController::class, 'home'])->name('home');
Route::group(['prefix' => 'user'], function(){
    Route::get('/{id}', [CreateController::class, 'user']);
    Route::get('/edit/{id}', [CreateController::class, 'userindex'])->name('userEdit');
});
Route::get('/dashboard', [CreateController::class, 'dashboard']);
Route::get('/update', [CreateController::class, 'userindex']);
Route::get('/create', [CreateController::class, 'index']);
Route::get('/assignment', [CreateController::class, 'assignment']);
Route::get('/calculate', [CreateController::class, 'calculate']);
Route::get('/calculate', [ComputeController::class, 'index']);
Route::post('/calculate', [ComputeController::class, 'compute'])->name('calculate.submit');
Route::fallback([CreateController::class, 'fallback']);




/*Route::fallback(function(){
    return "<div style='text-align: center; margin-top: 50px; font-family: sans-serif;'>
            <img src='" . asset('image/error.png') . "' alt='Not Found' style='width: 600px; height: auto;'><br>
            <h1>Sorry, the page you are looking for does not exist.</h1>
            </div>
        ";
}); */
