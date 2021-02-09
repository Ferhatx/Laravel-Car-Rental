<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Faq::all();
        return view('admin.faq', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.faq_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data2 = new Faq;
        $data2->question=$request->input('question');
        $data2->answer= $request->input('answer_icerik');
        $data2->position= $request->input('position');
        $data2->status = $request->input('status');
        $data2->save();
        return redirect()->route('admin_faq')->with('info','FAQ Başarıyla Eklendi.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function show(Faq $faq)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function edit(Faq $faq,$id)
    {
        $data=Faq::find($id);
        return view('admin.faq_edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faq $faq,$id)
    {
        $data3=Faq::find($id);
        $data3->question=$request->input('question');
        $data3->answer= $request->input('answer_icerik');
        $data3->position= $request->input('position');
        $data3->status = $request->input('status');
        $data3->save();
        return redirect()->route('admin_faq')->with('info','Faq Başarıyla Güncellenmiştir.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faq $faq,$id)
    {
        $data=Faq::find($id);
        $data->delete();
        return redirect()->route('admin_faq')->with('info','Mesajınız Silinmiştir.');
    }
}
