<?php

use Illuminate\Http\Request;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ResumeController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/



// Ajax Call Route

Route::get('/heroData', [HomeController::class, 'heroData']);
Route::get('/aboutdata', [HomeController::class, 'aboutData']);
Route::get('/socialData', [HomeController::class, 'socialData']);
Route::get('/projectsData', [ProjectController::class, 'projectsData']);
Route::get('/resumeLink', [ResumeController::class, 'resumeLink']);
Route::get('/experienceData', [ResumeController::class, 'experienceData']);
Route::get('/educationData', [ResumeController::class, 'educationData']);
Route::get('/skillsData', [ResumeController::class, 'skillsData']);
Route::get('/languageData', [ResumeController::class, 'languageData']);
Route::get('/contactData', [ContactController::class, 'contactData']);
