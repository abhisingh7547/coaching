<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{AuthController,Homecontroller,AdminController,StudentController};
Route::match(["get","post"],'/auth/login', [AuthController::class,"login"])->name('login');
Route::match(["get","post"],'/auth/signup', [AuthController::class,"signup"])->name('signup');
Route::get("/logout",[AuthController::class,"logout"])->name("logout");
Route::get("/",[Homecontroller::class,"index"])->name('homepage');

Route::middleware(['auth'])->group(function() {
    Route::resource("student",StudentController::class);
});