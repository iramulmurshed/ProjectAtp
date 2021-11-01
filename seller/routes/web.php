<?php

use App\Http\Controllers\SellerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[SellerController::class,'viewSellerSignUpPage'])->name('signup');
Route::get('/login',[SellerController::class,'viewSellerLogInPage'])->name('login');
Route::post('/',[SellerController::class,'verifySignup'])->name('signup');

