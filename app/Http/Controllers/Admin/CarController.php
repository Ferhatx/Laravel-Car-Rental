<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;
class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = DB::table('cars')->get();
        //$datalist =  Car::all();
       // print_r($datalist);
        //exit();

        return view('admin.car', ['datalist' => $datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datalist = DB::table( 'categories')->get()->where('parent_id',0);
        $datalist2 = DB::table( 'categories')->get()->where('parent_id','<>',0);
        return view('admin.car_add',['datalist2' => $datalist2,'datalist'=>$datalist]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $data = new Car;
            $data->title = $request->input('title');
            $data->keywords = $request->input('keywords');
            $data->description = $request->input('description');
            $data->category_id = $request->input('category_id');
            $data->sub_category_id = $request->input('sub_category_id');
            $data->user_id = Auth::id();
            $data->modeli = $request->input('modeli');
            $data->price = $request->input('price');
            $data->vites = $request->input('vites');
            $data->yakit = $request->input('yakit');
            $data->klima = $request->input('klima');
            $data->slug = $request->input('slug');
            $data->status = $request->input('status');
             if($request->file('image') != null) {
                     $data->image = Storage::putFile('images', $request->file('image'));
            }
        $data->save();
        return redirect()->route('admin_cars');
     /*

             if($request->hasfile('image')){
            $imageName = time().'.'.$request->image->extension();
            //$imageName=Str::slug($request->title).'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads/carimage'),$imageName);
            $data->image='uploads/'.$imageName;
            }








      DB::table('cars')->insert([
            'title' => $request->input('title'),
            'keywords' => $request->input('keywords'),
            'description' => $request->input('description'),
            'category_id' => $request->input('category_id'),
            'sub_category_id' => $request->input('sub_category_id'),
            'modeli' => $request->input('modeli'),
            'price' => $request->input('price'),
            'vites' => $request->input('vites'),
            'yakit' => $request->input('yakit'),
            'klima' => $request->input('klima'),
            'user_id'=>Auth::id(),
            'slug' => $request->input('slug'),
            'status' => $request->input('status'),
            if($request->file('image') != null){
            'image'=>Storage::putFile('images',$request->file('image')),
            }
        ]);*/




        /*
        $data=new cars;

            $data-> title = $request->input('title');
            $data->keywords = $request->input('keywords');
            $data->description = $request->input('description');
            $data->category_id = $request->input('category_id');
            $data->'sub_category_id' => $request->input('sub_category_id')
            $data->modeli = $request->input('modeli');
            $data->price = $request->input('price');
            $data->yakit = $request->input('yakit');
            $data->vites = $request->input('vites');
            $data->klima = $request->input('klima');
            $data->user_id=Auth::id();
            $data->slug = $request->input('slug');
            $data->status = $request->input('status');
        $data->save();
        return redirect()->route('admin.car');*/
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car,$id)
    {
        $data=Car::find($id);
        $datalist = DB::table( 'categories')->get()->where('parent_id',0);
        $datalist2 = DB::table( 'categories')->get()->where('parent_id','<>',0);
        return view('admin.car_edit',['data'=>$data,'datalist2' => $datalist2,'datalist'=>$datalist]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car,$id)
    {

        $data=Car::find($id);
        $data-> title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->category_id = $request->input('category_id');
        $data->sub_category_id = $request->input('sub_category_id');
        $data->modeli = $request->input('modeli');
        $data->price = $request->input('price');
        $data->yakit = $request->input('yakit');
        $data->vites = $request->input('vites');
        $data->klima = $request->input('klima');
        $data->slug = $request->input('slug');
        $data->status = $request->input('status');
         //if($request->file('image') != $data->image && $request->file('image') ==null ) {
        if($request->hasfile('image')){
            $data->image = Storage::putFile('images', $request->file('image'));
            }
        $data->save();
        return redirect()->route('admin_cars');







    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car,$id)
    {
        DB::table('cars')->where('id', '=', $id)->delete();
        return redirect()->route('admin_cars');
    }
}
