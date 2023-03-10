<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\IssuesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\NotesController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TaxisController;
use App\Http\Controllers\WakeUpCallsController;
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
// Home
Route::get('/', [HomeController::class,'index']);
Route::get('/home', [HomeController::class,'index']);

// Register
Route::get('/register', [RegisterController::class,'show']);
Route::post('/register',[RegisterController::class,'register']);

// Login
Route::get('/login', [LoginController::class,'show']);
Route::post('/login',[LoginController::class,'login']);

// Logout
Route::get('/logout',[LogoutController::class,'logout']);

//Issues
Route::post('/issues',[IssuesController::class,'store']); 

//Wake up calls
Route::post('/wakeUpCalls',[WakeUpCallsController::class,'store']);

//Notes 
Route::post('/notes',[NotesController::class,'store']);

//Taxis
Route::post('/taxis',[TaxisController::class,'store']);
