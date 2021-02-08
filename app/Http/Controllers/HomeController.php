<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Message;
use App\Models\Page;
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

    public static function getPage(){
        return   Page::first();
    }

    public function index(){

       // $data = DB::table( 'settings')->get()->where('id',1);
         $data=Setting::first();
        return view('home.index',['data'=>$data]);
    }

    public function hakkimizda(){

        return view('home.hakkimizda');
    }

    public function vizyonumuz(){
        return view('home.vizyonumuz');
    }

    public function misyonumuz(){
        $misyonumuz=Page::first();
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
    public function sikca_sorulan_sorular(){
        return view('home.sikca_sorulan_sorular');
    }
    public function iletisim(){
        return view('home.iletisim');
    }

    public function sendmessage(Request $request){
        $data2=new Message();
        $data2->name=$request->input('name');
        $data2->email=$request->input('email');
        $data2->phone=$request->input('phone');
        $data2->subject=$request->input('subject');
        $data2->message=$request->input('message');
        $data2->ipaddres=$request->input('ipaddres');
        $data2->save();
        return redirect()->route('iletisim')->with('success','Mesajınız Kaydedilmiştir. Teşekkür ederiz.');
    }








}
