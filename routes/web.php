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
    Route::get('/register/leader1', 'getLeaderPage1')->name('getLeaderPage1');
    Route::post('/register/leader1', 'LeaderPage1')->name('LeaderPage1');
    Route::get('/register/leader1', 'getLeaderPage1')->name('getLeaderPage1');
    Route::post('/register/leader1', 'LeaderPage1')->name('LeaderPage1');
    Route::get('/register/leader2', 'getLeaderPage2')->name('getLeaderPage2');
    Route::post('/register/leader2', 'LeaderPage2')->name('LeaderPage2');
    Route::get('/register/member11', 'getMember1Page1')->name('getMember1Page1');
    Route::post('/register/member11', 'Member1Page1')->name('Member1Page1');
    Route::get('/register/member12', 'getMember1Page2')->name('getMember1Page2');
    Route::post('/register/member12', 'Member1Page2')->name('Member1Page2');
    Route::get('/register/member21', 'getMember2Page1')->name('getMember2Page1');
    Route::post('/register/member21', 'Member2Page1')->name('Member2Page1');
    Route::get('/register/member22', 'getMember2Page2')->name('getMember2Page2');
    Route::post('/register/member22', 'Member2Page2')->name('Member2Page2');

    Route::get('/admin/register', 'getRegisterAdmin')->name('getRegisterAdmin');
    Route::post('/admin/register', 'registerAdmin')->name('registerAdmin');
    Route::get('/admin/login', 'getLoginAdmin')->name('getLoginAdmin');
    Route::post('/admin/login', 'loginAdmin')->name('loginAdmin');
    Route::get('/admin/participant', 'getParticipantAdmin')->name('getParticipantAdmin');
    Route::post('/admin/participant', 'participantAdmin')->name('participantAdmin');

});