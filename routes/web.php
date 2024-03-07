<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TestController;
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



// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/apply_for_job_role', [RoleController::class, 'show']);

Route::post('/store', [FormController::class, 'store'])->name('store');

Route::get('/answer_test/{id}/{user_id}', [TestController::class, 'questions'])->name('answer_test');

Route::post('/answers_submitted/{user_id}/{test_id}', [TestController::class,'answers'])->name('submit_answer');
