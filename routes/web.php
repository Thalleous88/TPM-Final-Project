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
    
    // Leader registration pages
    Route::get('/register/leader1', 'getLeaderPage1')->name('getLeaderPage1');
    Route::post('/register/leader1', 'storeLeaderPage1')->name('storeLeaderPage1');  // Correct method name
    Route::get('/register/leader2', 'getLeaderPage2')->name('getLeaderPage2');
    Route::post('/register/leader2', 'storeLeaderPage2')->name('storeLeaderPage2');  // Correct method name
    
    // Member 1 registration pages
    Route::get('/register/member11', 'getMember1Page1')->name('getMember1Page1');
    Route::post('/register/member11', 'storeMember1Page1')->name('storeMember1Page1');  // Correct method name
    Route::get('/register/member12', 'getMember1Page2')->name('getMember1Page2');
    Route::post('/register/member12', 'storeMember1Page2')->name('storeMember1Page2');  // Correct method name
    
    // Member 2 registration pages
    Route::get('/register/member21', 'getMember2Page1')->name('getMember2Page1');
    Route::post('/register/member21', 'storeMember2Page1')->name('storeMember2Page1');  // Correct method name
    Route::get('/register/member22', 'getMember2Page2')->name('getMember2Page2');
    Route::post('/register/member22', 'storeMember2Page2')->name('storeMember2Page2');  // Correct method name
    
    // Admin routes
    Route::get('/admin/register', 'getRegisterAdmin')->name('getRegisterAdmin');
    Route::post('/admin/register', 'registerAdmin')->name('registerAdmin');
    Route::get('/admin/login', 'getLoginAdmin')->name('getLoginAdmin');
    Route::post('/admin/login', 'loginAdmin')->name('loginAdmin');
    Route::post('/admin/logout', 'logoutAdmin')->name('logoutAdmin');
    Route::get('/admin/participant', 'getParticipantAdmin')->name('getParticipantAdmin')->middleware('adminauth');
    Route::post('/admin/participant', 'participantAdmin')->name('participantAdmin')->middleware('adminauth');
});
