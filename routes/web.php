<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\TempimageController;
use Illuminate\Support\Facades\Route;
Route::get('/login',function(){
    return view('admin.auth.login');
});
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::middleware(['auth'])->group(function () {
    Route::resource('skill',SkillController::class);
    Route::resource('project',ProjectController::class);
    Route::get('/', function () {
        return view('admin.index.index');
    })->name('admin');
    Route::get('/admin', function () {
        return view('admin.index.index');
    });
    Route::post('/temp-image-upload',[TempimageController::class,'create'])->name('temp-image-upload');
});
