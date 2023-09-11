<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Dashboard\CreateBankAccountController;
use App\Http\Controllers\Dashboard\HomeController;
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
    return view('welcome');
});

Route::get("/login", [LoginController::class, "index"])->name("login");
Route::get("/dashboard/register", [RegisterController::class, "index"])->name("register");
Route::post("/dashboard/register", [RegisterController::class, "register"])->name("register-user");
Route::get("/dashboard/home", [HomeController::class, "index"])->name("dashboard");

Route::get("/dashboard/register_bank_account", [CreateBankAccountController::class, "index"])
->name("ceate-bank-account");
Route::post("/dashboard/register_bank_account", [CreateBankAccountController::class, "create"])->name("register-bank-account");

Route::get("/dashboard/show_bank_accounts", [HomeController::class, "show"])->name("show");
Route::get("/dashboard/inOut", [HomeController::class, "inOut"])->name("inOut");