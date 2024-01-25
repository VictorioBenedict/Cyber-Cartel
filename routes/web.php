<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\ProductsController;
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
    return  view('/Products_Information/System_Units/product_Info_SystemUnit_1');
});

Route::get('/product_Info_SystemUnit_2', function(){
    return  view('/Products_Information/System_Units/product_Info_SystemUnit_2');
});

Route::get('/cart', function(){
    return  view('Cart');
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

Route::get('/checkOut', function(){
    return  view('CheckOut');
});

Route::get('/profile', function(){
    return  view('Profile.User_Profile');
});

Route::get('/my_purchase', function(){
    return  view('Profile.My_Purchase');
});

Route::get('/my_account', function(){
    return  view('Profile.User_Profile');
});

Route::get('/bank_and_card', function(){
    return  view('Profile.BankandCard');
});

Route::get('/address', function(){
    return  view('Profile.Address');
});

Route::get('/add_card_details', function(){
    return  view('Profile.AddNewCard');
});

Route::get('/add_new_address', function(){
    return  view('Profile.Add_New_Address');
});

Route::get('/user_address_details', function(){
    return  view('Profile.User_Address_Details');
});


Route::get('/change_passwordV', function(){
    return  view('Profile.Change_Password_Verification');
});

Route::post('/change_password', function(){
    return  view('Profile.Change_Password');
});

Route::get('/change_email', function(){
    return  view('Profile.Change_Email');
});
Route::get('/change_number', function(){
    return  view('Profile.Change_Phone_Number');
});

//CATEGORIES
Route::get('/chassis_category', function(){
    return  view('Categories.Chassis');
});

Route::get('/gpu_category', function(){
    return  view('Categories.Gpu');
});

Route::get('/monitor_category', function(){
    return  view('Categories.Monitor');
});
Route::get('/hdd_category', function(){
    return  view('Categories.HDD');
});

Route::get('/motherboard_category', function(){
    return  view('Categories.Motherboard');
});

Route::get('/pre_built_units', function(){
    return  view('Categories.Pre-Built');
});

Route::get('/processor_category', function(){
    return  view('Categories.Processor');
});

Route::get('/psu_category', function(){
    return  view('Categories.PSU');
});

Route::get('/ram_category', function(){
    return  view('Categories.Ram');
});

Route::get('/ssd_category', function(){
    return  view('Categories.SSD');
});
