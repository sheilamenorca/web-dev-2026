<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreateController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sample', function(){
    return view('home');
})->name('home');


Route::group(['prefix' => 'user'], function(){
    Route::get('/{id}', function($id){
    return "<a href = '".route('userEdit', $id)."'> User Page <a/>";
    });

    Route::get('/edit/{id}', function($id){
        return view('user.edit', ['id' => $id, 'name' => $id]);
        //return view('user.edit', compact('id'));
    })->name('userEdit');
});

/*Route::fallback(function(){
    return "<div style='text-align: center; margin-top: 50px; font-family: sans-serif;'>
            <img src='" . asset('image/error.png') . "' alt='Not Found' style='width: 600px; height: auto;'><br>
            <h1>Sorry, the page you are looking for does not exist.</h1>
            </div>
        ";
}); */

Route::get('dashboard', function(){
    return view('user.dashboard');
});

Route::get('/update', [CreateController::class, 'userindex']);
Route::get('/create', [CreateController::class, 'index']);


Route::get('/assignment', function() {
    return view('user.assignment');
});

Route::fallback(function () {
    return redirect()->route('home');
});


