<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public static function categorylist(){
        return Category::where('parent_id','=',0)->get();
    }
    public static function getSetting(){
        return   Setting::first();
    }

    public function index(){

       // $data = DB::table( 'settings')->get()->where('id',1);
         $data=Setting::first();
        return view('home.index',['data'=>$data,'page'=>'anasayfa']);
    }


    public function hakkimizda(){
        return view('home.hakkimizda');
    }

    public function vizyonumuz(){
        return view('home.vizyonumuz');
    }

    public function misyonumuz(){
        return view('home.misyonumuz');
    }
    public function filo_kiralama(){
        return view('home.filo_kiralama');
    }

    public function kiralama_sozlesmesi(){
        return view('home.kiralama_sozlesmesi');
    }
    public function kiralama_kosullari(){
        return view('home.kiralama_kosullari');
    }
    public function iletisim(){
        return view('home.iletisim');
    }










}
