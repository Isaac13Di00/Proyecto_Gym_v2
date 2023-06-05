<?php

use App\Http\Controllers\CitasController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('login');
});


Route::group(['middleware' => 'auth'], function(){
    Route::get('/home', [UserController::class, 'index'])->name('home');

    Route::get('/agendar', function(){
        return view('schedule');
    });
    Route::post('/agendar', [CitasController::class, 'store'])->name('agendar.store');
    Route::get('/users', [UserController::class, 'show'])->name('users.show');
    Route::get('/admins', [UserController::class, 'showAdmins'])->name('users.showAdmins');
    Route::get('/user/{id}', [UserController::class, 'showUser'])->name('user.showUser');
    Route::get('/register', function(){
        return view('register');
    })->name('users.register');
    Route::post('/register', [UserController::class, 'create'])->name('users.registerNew');
    Route::put('/home', [UserController::class, 'changeImage'])->name('user.image');
});