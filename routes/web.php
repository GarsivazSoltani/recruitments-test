<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ConditionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RecruitmentController;
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

Route::get('/', [HomeController::class, 'home'])->name('home.welcome');
Route::prefix('auth')->group(function (){
    Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('auth.register.form');
    Route::post('register', [RegisterController::class, 'register'])->name('auth.register');
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('auth.login.form');
    Route::post('login', [LoginController::class, 'login'])->name('auth.login');
    Route::get('logout', [LoginController::class, 'logout'])->name('auth.logout');
});

// Route::get('logout', function(){
//     Auth::logout();
// });

// Route::get('register-test', [HomeController::class, 'registerTestForm'])->name('recruitments.register.test.form');
// Route::post('register-test', [HomeController::class, 'registerTest'])->name('recruitments.register.test');
// Route::get('register-details', [HomeController::class, 'registerDetailsForm'])->name('recruitments.register.details.form');
// Route::post('register-details', [HomeController::class, 'registerDetails'])->name('recruitments.register.details');

Route::prefix('recruitment')->group(function (){
    // create
    Route::get('', [RecruitmentController::class, 'index'])->name('recruitment.index');
    Route::get('create', [RecruitmentController::class, 'create'])->name('recruitment.create');
    Route::post('', [RecruitmentController::class, 'store'])->name('recruitment.store');

    // edit
    Route::get('{id}/edit', [RecruitmentController::class, 'edit'])->name('recruitment.edit');
    Route::put('{id}', [RecruitmentController::class, 'update'])->name('recruitment.update');

    // show
    Route::get('{id}', [RecruitmentController::class, 'show'])->name('recruitment.show');
    Route::post('{id}/conditions', [RecruitmentController::class, 'storeConditions'])->name('recruitment.conditions');

    // delete
    Route::delete('{id}', [RecruitmentController::class, 'destroy']);
});

Route::prefix('condition')->group(function (){
    // edit
    Route::get('{id}/edit', [ConditionController::class, 'edit'])->name('condition.edit');
    Route::put('{id}', [ConditionController::class, 'update'])->name('condition.update');
    
    // show
    // Route::get('{id}', [ConditionController::class, 'show'])->name('condition.show');
    
    // delete
    // Route::get('{id}/delete', [ConditionController::class, 'delete'])->name('condition.delete');
    Route::delete('{id}', [ConditionController::class, 'destroy']);
});
