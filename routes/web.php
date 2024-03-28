<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
Route::get('/login',function(){
    return view('admin.auth.login');
});
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('admin.index.index');
    })->name('admin');
    Route::get('/admin', function () {
        return view('admin.index.index');
    });
});
