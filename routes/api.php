<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\ForgotPasswordController;
use App\Http\Controllers\API\ProfileController;
use App\Http\Controllers\API\AddressController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\CartController;

use App\Http\Controllers\ProductsController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These 
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//AUTHENTICATION
Route::post('/auth/register', [AuthController::class, 'register']);
Route::post('/auth/login', [AuthController::class, 'login']);
Route::post('/auth/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

Route::post('/forgot-password', [ForgotPasswordController::class, 'forgotPassword']);
Route::post('/reset-password', [ForgotPasswordController::class, 'reset']);

//PROFILE
Route::post('/profile/update-profile', [ProfileController::class, 'update_profile'])->middleware('auth:sanctum');
Route::post('/profile/change-password', [ProfileController::class, 'change_password'])->middleware('auth:sanctum');

Route::get('/profile/address-index', [AddressController::class, 'index']);
Route::post('/profile/address-create', [AddressController::class, 'create_address']);

//CART FUNCTIONS
Route::get('cart/cart-show', [CartController::class, 'index']);
Route::post('cart/cart-add', [CartController::class, 'addCart']);

//PRODUCT FUNCTIONS
Route::get('/products/products-search/{name}', [ProductsController::class, 'search_product']);
Route::get('/products/category-search/{category}', [ProductsController::class, 'search_category']);
Route::post('/products/products-create', [ProductsController::class, 'store']);
Route::get('/products/products-show', [ProductsController::class, 'index']);
Route::get('/products/show-cpu', [ProductsController::class, 'index_cpu']);
Route::get('/products/show-gpu', [ProductsController::class, 'index_gpu']);

Route::apiResource('users', UserController::class)->middleware('auth:sanctum');
Route::apiResource('addresses', AddressController::class)->middleware('auth:sanctum');

