<?php

use App\Http\Controllers\ResumeController;
use App\Http\Controllers\admin\AboutController;
use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\admin\EducationController;
use App\Http\Controllers\admin\ExperienceController;
use App\Http\Controllers\admin\SkillsController;
use App\Models\Experience;
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

Route::get('/', [ResumeController::class, 'index']);
Route::get('/cv', [ResumeController::class, 'index'])->name('indexCV');

Route::prefix('/admin')->group(function(){
    Route::resource('/about', AboutController::class);
    Route::resource('/experience', ExperienceController::class);
    Route::resource('/education', EducationController::class);
    Route::resource('/skills', SkillsController::class);
    Route::resource('/contact', ContactController::class);
});
