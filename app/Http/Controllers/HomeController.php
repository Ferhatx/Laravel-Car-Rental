<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public static function categorylist(){
        return Category::where('parent_id','=',0)->get();
    }


    public function index(){
        return view('home.index');
    }

    public function hakkimizda(){
        return view('home.hakkimizda');

    }












}
