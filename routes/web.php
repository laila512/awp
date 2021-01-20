<?php

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

use App\Http\Controllers\UtamaController;
use App\Http\Controllers\AgenController;

Route::get("/", [UtamaController::class, "home"])->name("home");
Route::get("/about", [UtamaController::class, "about"])->name("about");
Route::get("/contact", [UtamaController::class, "contact"])->name("contact");
Route::get("/portofolio", [UtamaController::class, "portofolio"])->name("portofolio");
Route::get("/service", [UtamaController::class, "service"])->name("service");

Route::get("/agen", [AgenController::class, "agen"])->name("agen");
Route::post("/agen/proses", [AgenController::class, "proses"])->name("agen_proses");

