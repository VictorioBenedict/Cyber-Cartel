<?php

use App\Http\Controllers\Authentication_Controller;
use App\Http\Controllers\Authetication_Controller;
use App\Http\Controllers\Category_Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Profile_Controller;
use Symfony\Component\HttpKernel\Profiler\Profile;

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

Route::get('/', function () {
    return view('LandingPage');
});



//Authentication
Route::post('/login', [SignupController::class, 'signups']);

Route::get('/login', function () {
    return view('Login');
});

Route::get('/signup', function () {
    return view('Signup');
});

Route::get('/enterEmail', function () {
    return view('ForgotPassword');
});

Route::post('/conPass', function () {
    return view('ConfirmPass');
});


Route::get('/product_Info_SystemUnit_1', function () {
    return view('/Products_Information/System_Units/product_Info_SystemUnit_1');
});

Route::get('/product_Info_SystemUnit_2', function () {
    return view('/Products_Information/System_Units/product_Info_SystemUnit_2');
});

Route::get('/cart', function () {
    return view('Cart');
});

Route::get('/product_demo', function () {
    return view('Product_demo');
});

Route::get('/verify', function () {
    return view('Verify_Page');
});

Route::post('/verify', function () {
    return view('Verify_Page');
});

Route::get('/checkOut', function () {
    return view('CheckOut');
});

Route::get('/home', function () {
    return view('DashBoard');
});

//Authetication / Verification
Route::get('/dashboard', [Authentication_Controller::class, 'Login_Authentication']);
Route::get('/dashboard', [Authentication_Controller::class, 'Sign_Up_Authentication']);
Route::post('/dashboard', [Authentication_Controller::class, 'Login_Authentication']);
Route::post('/dashboard', [Authentication_Controller::class, 'Sign_Up_Authentication']);

//PROFILE
Route::get('/change_number', [Profile_Controller::class, 'New_PhoneNumber_Route']);
Route::get('/my_purchase', [Profile_Controller::class, 'My_Purchase_Route']);
Route::get('/profile', [Profile_Controller::class, 'Profile_Route']);
Route::get('/bank_and_card', [Profile_Controller::class, 'BankandCard_Route']);
Route::get('/address', [Profile_Controller::class, 'Address_Route']);
Route::get('/add_card_details', [Profile_Controller::class, 'New_Card_Route']);
Route::get('/add_new_address', [Profile_Controller::class, 'New_Address_Route']);
Route::get('/user_address_details', [Profile_Controller::class, 'User_Address_Details_Route']);
Route::get('/change_passwordV', [Profile_Controller::class, 'Pass_Verification_Route']);
Route::post('/change_password', [Profile_Controller::class, 'New_Password_Route']);
Route::get('/change_email', [Profile_Controller::class, 'New_Email_Route']);
Route::get('/my_account', [Profile_Controller::class, 'Profile_Route']);



//CATEGORIES
Route::get('/processor_category', [Category_Controller::class, 'Cpu_Category_Route']);
Route::get('/gpu_category', [Category_Controller::class, 'Gpu_Category_Route']);
Route::get('/ram_category', [Category_Controller::class, 'Ram_Category_Route']);
Route::get('/hdd_category', [Category_Controller::class, 'HDD_Category_Route']);
Route::get('/ssd_category', [Category_Controller::class, 'SSD_Category_Route']);
Route::get('/motherboard_category', [Category_Controller::class, 'Motherboard_Category_Route']);
Route::get('/chassis_category', [Category_Controller::class, 'Chassis_Category_Route']);
Route::get('/monitor_category', [Category_Controller::class, 'Monitor_Category_Route']);
Route::get('/pre_built_units', [Category_Controller::class, 'PreBuilt_Category_Route']);
Route::get('/psu_category', [Category_Controller::class, 'PSU_Category_Route']);