<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
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
// Route::get('register-test', [HomeController::class, 'registerTestForm'])->name('recruitments.register.test.form');
// Route::post('register-test', [HomeController::class, 'registerTest'])->name('recruitments.register.test');
// Route::get('register-details', [HomeController::class, 'registerDetailsForm'])->name('recruitments.register.details.form');
// Route::post('register-details', [HomeController::class, 'registerDetails'])->name('recruitments.register.details');

Route::prefix('job')->group(function (){
    // create
    Route::get('', [RecruitmentController::class, 'index'])->name('job.index');
    Route::get('create', [RecruitmentController::class, 'create'])->name('job.create');
    Route::post('', [RecruitmentController::class, 'store'])->name('job.store');

    // edit
    Route::get('{id}/edit', [RecruitmentController::class, 'edit'])->name('job.edit');
    Route::put('{id}', [RecruitmentController::class, 'update'])->name('job.update');

    // show
    Route::get('{id}', [RecruitmentController::class, 'show'])->name('job.show');

    // delete
    Route::delete('{id}', [RecruitmentController::class, 'destroy']);
});