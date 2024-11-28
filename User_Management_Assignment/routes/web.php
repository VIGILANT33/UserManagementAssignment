<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', [UserController::class,'createAccount']);
Route::get('/', function () {
    return view('users.index');
});

Route::get('/user/create', function () {
    return view('users.create');
});
Route::get('/user/show', function () {
    return view('users.show');
});



Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'validateAccount']);
// Route::post('/login', [UserController::class, 'validateAccountEmail']);// Use this route for Email as a validation credentails
Route::get('/register', [UserController::class, 'createUser'])->name('register');
Route::post('/register', [UserController::class, 'registerUser']);
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/profile', [UserController::class, 'showUser'])->middleware('auth')->name('profile');
