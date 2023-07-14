<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontendController;
use App\Models\User;
use Illuminate\Http\Request;

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


// Index page 
Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');

// Contact page
Route::get('/contact', [frontendController::class, 'contact'])->name('frontend.contact');

// Services 
Route::get('/services', [frontendController::class, 'services'])->name('frontend.services');

// Faq 
Route::get('/faq', [frontendController::class, 'faq'])->name('frontend.faq');

// Projects
Route::get('/projects', [frontendController::class, 'projects'])->name('frontend.projects');

// Team
Route::get('/team', [frontendController::class, 'team'])->name('frontend.team');


## VOYAGER (dashboard)
Route::group(['prefix' => 'dashboard'], function () {
    Voyager::routes();
});
