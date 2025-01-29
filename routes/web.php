<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;

Route::get('/', function () {
    return view('landingpage');
})->name('landingpage');

Route::get('/admin', function () {
    return view('admin');
})->name('admin');

Route::controller(AuthenticationController::class)->group(function() {
    Route::get('/register', 'getRegister')->name('getRegister');
    Route::post('/register', 'register')->name('register');
    Route::get('/login', 'getLogin')->name('getLogin');
    Route::post('/login', 'login')->name('login');
    Route::post('/logout', 'logout')->name('logout');

    Route::get('/admin/register', 'getRegisterAdmin')->name('getRegisterAdmin');
    Route::post('/admin/register', 'registerAdmin')->name('registerAdmin');
    Route::get('/admin/login', 'getLoginAdmin')->name('getLoginAdmin');
    Route::post('/admin/login', 'loginAdmin')->name('loginAdmin');
    Route::get('/admin/participant', 'getParticipantAdmin')->name('getParticipantAdmin');
    Route::post('/admin/participant', 'participantAdmin')->name('participantAdmin');
});