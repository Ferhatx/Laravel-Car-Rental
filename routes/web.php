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
    Route::get('category/edit/{id}',[App\Http\Controllers\Admin\CategoryController::class,'edit'])->name('admin_category_edit');
    Route::post('category/update/{id}',[App\Http\Controllers\Admin\CategoryController::class,'update'])->name('admin_category_update');
    Route::get('category/delete/{id}',[App\Http\Controllers\Admin\CategoryController::class,'destroy'])->name('admin_category_delete');
    Route::get('category/show',[App\Http\Controllers\Admin\CategoryController::class,'show'])->name('admin_category_show');
});


//ARABA VERİLERİNİ EKLEDİĞİM YER
Route::prefix('car')->group(function (){
    Route::get('/',[App\Http\Controllers\Admin\CarController::class,'index'])->name('admin_cars');
    Route::get('create',[App\Http\Controllers\Admin\CarController::class,'create'])->name('admin_car_add');
    Route::post('store',[App\Http\Controllers\Admin\CarController::class,'store'])->name('admin_car_store');
    Route::get('edit/{id}',[App\Http\Controllers\Admin\CarController::class,'edit'])->name('admin_car_edit');
    Route::post('update/{id}',[App\Http\Controllers\Admin\CarController::class,'update'])->name('admin_car_update');
    Route::get('delete/{id}',[App\Http\Controllers\Admin\CarController::class,'destroy'])->name('admin_car_delete');
    Route::get('show',[App\Http\Controllers\Admin\CarController::class,'show'])->name('admin_car_show');
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




