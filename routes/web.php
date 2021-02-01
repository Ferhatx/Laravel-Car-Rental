<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//ADMİN PANEL
Route::get('/admin',[App\Http\Controllers\Admin\HomeController::class,'index'])->name('adminhome')->middleware('auth');
Route::get('/admin/login',[App\Http\Controllers\Admin\HomeController::class,'login'])->name('admin_login');
Route::post('/admin/logincheck',[App\Http\Controllers\Admin\HomeController::class,'logincheck'])->name('admin_logincheck');
Route::get('/admin/logout',[App\Http\Controllers\Admin\HomeController::class,'logout'])->name('admin_logout');


//CATEGORY
Route::middleware('auth')->prefix('admin')->group(function (){
    Route::get('/',[App\Http\Controllers\Admin\HomeController::class,'index'])->name('admin_home');
    Route::get('category',[App\Http\Controllers\Admin\CategoryController::class,'index'])->name('admin_category');
    Route::post('category/create',[App\Http\Controllers\Admin\CategoryController::class,'create'])->name('admin_category_create');
    Route::get('category/add',[App\Http\Controllers\Admin\CategoryController::class,'add'])->name('admin_category_add');
    Route::post('category/update',[App\Http\Controllers\Admin\CategoryController::class,'update'])->name('admin_category_update');
    Route::get('category/delete/{id}',[App\Http\Controllers\Admin\CategoryController::class,'destroy'])->name('admin_category_delete');
    Route::get('category/show',[App\Http\Controllers\Admin\CategoryController::class,'show'])->name('admin_category_show');
});


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




