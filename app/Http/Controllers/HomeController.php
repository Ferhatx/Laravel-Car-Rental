<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Category;
use App\Models\Faq;
use App\Models\Message;
use App\Models\Page;
use App\Models\Reservation;
use App\Models\Review;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
         $data2=Car::all();
         $data3=Review::all();
        return view('home.index',['data'=>$data,'data2'=>$data2,'data3'=>$data3]);
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
        $datalist=Faq::all()->sortBy('position');
        return view('home.sikca_sorulan_sorular',['datalist'=>$datalist]);
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




    public function otomobil(){
        $data = DB::table( 'cars')->get()->where('category_id','Otomobil')->where('status','=','True');
        return view('home.otomobil',['data'=>$data]);
    }

    public function otomobil_detay($id){
        $data=Car::find($id);
        $datalist = DB::table( 'images')->get()->where('araba_id','=',$id);
        $datalist2 = DB::table( 'reviews')->get()->where('arac_id','=',$id)->where('status','=','True');
        return view('home.otomobil_detay',['data'=>$data,'datalist'=>$datalist,'datalist2'=>$datalist2]);
    }

    public function ticariaraclar(){
        $data = DB::table( 'cars')->get()->where('category_id','Ticari Araç');
        return view('home.ticariaraclar',['data'=>$data]);
    }

    public function ticariaraclar_detay($id){
        $data=Car::find($id);
        $datalist = DB::table( 'images')->get()->where('araba_id','=',$id);
        return view('home.ticariaraclar_detay',['data'=>$data,'datalist'=>$datalist]);
    }

    public function araziaraclar(){
        $data = DB::table( 'cars')->get()->where('category_id','Arazi Araçları');
        return view('home.araziaraclar',['data'=>$data]);
    }

    public function araziaraclar_detay($id){
        $data=Car::find($id);
        $datalist = DB::table( 'images')->get()->where('araba_id','=',$id);
        return view('home.araziaraclar_detay',['data'=>$data,'datalist'=>$datalist]);
    }

    public function tumarclar(){
        $data = DB::table( 'cars')->get();
        return view('home.tumarclar',['data'=>$data]);
    }

    public function tumarclar_detay($id){
        $data=Car::find($id);
        $datalist = DB::table( 'images')->get()->where('araba_id','=',$id);
        $datalist2 = DB::table( 'reviews')->get()->where('arac_id','=',$id)->where('status','=','True');
        return view('home.tumarclar_detay',['data'=>$data,'datalist'=>$datalist,'datalist2'=>$datalist2]);
    }

    public function reservation(Request $request){


        $ilktarihstr=strtotime($request->input('rezdate'));

        $sontarihstr=strtotime($request->input('returndate'));

        $fark=($sontarihstr-$ilktarihstr)/86400;

        $price=$fark *$request->input('price');
        $total=$price*1.18;


        $data3=new Reservation();
        $data3->user_id = Auth::id();
        $data3->car_id=$request->input('car_id');
        $data3->alis_ofis=$request->input('alis_ofis');
        $data3->alis_ofis=$request->input('alis_ofis');
        $data3->rezdate=$request->input('rezdate');
        $data3->reztime=$request->input('reztime');
        $data3->donus_ofis=$request->input('donus_ofis');
        $data3->returndate=$request->input('returndate');
        $data3->returntime=$request->input('returntime');
        $data3->days=$fark;
        $data3->price=$price;
        $data3->total=$total;
        $data3->ip=$request->input('ipaddres');
        $data3->save();
        return redirect()->route('anasayfa')->with('success','Randevunuz Kaydedilmiştir. Teşekkür ederiz.');
    }



    public function user_reservations(){
        $data = DB::table( 'reservations')->get()->where('user_id','=',Auth::id());
        $data2=Review::where('user_id',Auth::user()->name)->get();
        #$data2 = DB::table( 'reviews')->get()->where('user_id','=',Auth::user()->name);
        return view('home.user_reservations',['data' => $data,'data2' => $data2]);
    }


    public function yorum_kaydet(Request $request,$id){
        $data4=new Review();
        $data4->user_id =Auth::user()->name;
        $data4->category_id=$request->input('arac_id');
        $data4->subject=$request->input('yorum_konu');
        $data4->review=$request->input('yorum_icerik');
        $data4->IP=$request->input('IP');
        $data4->status='New';
        $data4->arac_id=$id;
        $data4->save();

        return redirect()->route('tumarclar_detay',['id'=>$id]);

    }

    public function reservation_cancel(Request $request,$id){
        $data=Reservation::find($id);
        $data->status='Kullanıcı Tarafından İptal Edildi';
        $data->save();
        return redirect()->route('user_reservations');
    }

    public function yorum_sil(Request $request,$id)
    {
        DB::table('reviews')->where('id', '=', $id)->delete();
        return redirect()->route('user_reservations')->with('info','Yorumunuz Silinmiştir.');
    }




}
