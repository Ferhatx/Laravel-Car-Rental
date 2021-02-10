<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
       $data=Car::find($id);
       $datalist = DB::table( 'images')->get()->where('araba_id','=',$id);
        //$datalist2 = DB::table( 'categories')->get()->where('parent_id','<>',0);
        return view('admin.image_add',['data'=>$data,'datalist'=>$datalist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        $data = new Image;
        $data->title = $request->input('title');
        $data->category_id = $request->input('category_id');
        $data->sub_category_id =$request->input('sub_category_id');
        $data->category_title =$request->input('category_title');
        $data->araba_id =$id;
        $data->image=Storage::putFile('images',$request->file('image'));
        $data->save();
        return redirect()->route('admin_image_add',['id'=>$id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image,$id)
    {
        $data=Image::find($id);
        $data->delete();
        return redirect()->route('admin_cars')->with('info','Resminiz Silinmiştir.');
    }
}
