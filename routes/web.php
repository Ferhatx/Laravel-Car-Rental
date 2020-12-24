<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

//ADMİN PANEL
Route::get('/admin',[App\Http\Controllers\Admin\HomeController::class,'index'])->name('adminhome');
