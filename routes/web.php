<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\DashboardController;

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
// Route::get('/dashboard',[DashboardController::class, 'dashboard']);

// Route::get('/login',[LoginController::class, 'login']);

// Route::get('/signup',[SignupController::class, 'signup']);

Route::get('/', function(){
    return  view('LandingPage');
});

Route::post('/login', [SignupController::class, 'signups']);

Route::get('/login', function(){
    return  view('Login');
});

Route::get('/signup', function(){
    return  view('Signup');
});

Route::get('/enterEmail', function(){
    return  view('ForgotPassword');
});

Route::post('/conPass', function(){
    return  view('ConfirmPass');
});

Route::post('/dashboard', [LoginController::class, 'login']);

Route::get('/dashboard', [DashboardController::class, 'dashboard']);

Route::get('/product_Info_SystemUnit_1', function(){
    return  view('Product_Info_SystemUnit_1');
});

Route::get('/market', function(){
    return  view('Market_Place');
});

Route::get('/product_demo', function(){
    return  view('Product_demo');
});

Route::get('/verify', function(){
    return  view('Verify_Page');
});

Route::post('/verify', function(){
    return  view('Verify_Page');
});
