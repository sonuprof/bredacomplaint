<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ComplaintController;




Route::middleware('checkSession')->group(function () {
       
// ComplaintController 
Route::get('/add-complaint', [ComplaintController::class, 'add_complaint'])->name('add-complaint');
Route::post('/save-complaint', [ComplaintController::class, 'create'])->name('save-complaint');
Route::get('/view-complaint', [ComplaintController::class, 'view_complaint'])->name('view-complaint');
Route::get('/close/{id}', [ComplaintController::class, 'edit'])->name('close');
Route::post('/update-complaint', [ComplaintController::class, 'update'])->name('update-complaint');
// ComplaintController 

// UserController
Route::get('/add-user', [UserController::class, 'index'])->name('add-user');
Route::post('/save-user', [UserController::class, 'create'])->name('save-user');
Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit');

Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');

// UserController

// LoginController
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
// LoginController


       });
   
// LoginController 
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::match(['get', 'post'],'/loginuser',[LoginController::class,'loginuser'])->name('loginuser');
// LoginController 








