<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//ADMİN PANEL
Route::get('/admin',[App\Http\Controllers\Admin\HomeController::class,'index'])->name('adminhome')->middleware('auth');
Route::get('/admin/login',[App\Http\Controllers\Admin\HomeController::class,'login'])->name('admin_login');
Route::post('/admin/logincheck',[App\Http\Controllers\Admin\HomeController::class,'logincheck'])->name('admin_logincheck');
Route::get('/admin/logout',[App\Http\Controllers\Admin\HomeController::class,'logout'])->name('admin_logout');





Route::get('/home2', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



//Bu işlem ile route gitmeden sayfaya ulaşıyorum.
Route::get('/', function () {
    return view('home.index');
});
/////




//Route::get('/anasayfa', [HomeController::class, 'index']); bu controller gidip alır

Route::get('/hakkimizda',[HomeController::class,'hakkimizda']);




