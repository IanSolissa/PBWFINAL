<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CreateDashboard;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomePagesController;
use App\Http\Controllers\LandingPageColdPlayerController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LandingpagePinkFloydController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });


require __DIR__.'/auth.php';
Route::get('/',[LandingPageController::class,'index']);

Route::get('/Dashboard/Createnews',[CreateDashboard::class,'index']);
Route::resource('/Register',RegisterController::class);
Route::resource('/Login',LoginController::class);
Route::resource('/homepage',HomePagesController::class);
Route::resource('/PinkFloyd',LandingpagePinkFloydController::class);
Route::resource('/JustinBieber',LandingPageColdPlayerController::class);
Route::resource('/Category',CategoryController::class);
Route::resource('/dashboard',DashboardController::class);
