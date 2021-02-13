<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Reservation::all();
        return view('admin.reservation', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation,$id)
    {
        $data=Reservation::find($id);

        return view('admin.reservation_edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation,$id)
    {
        $data=Reservation::find($id);
        $data->status=$request->input('status');;
        $data->note=$request->input('note_icerik');
        $data->save();

        return view('admin.reservation_edit',['data'=>$data]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation,$id)
    {
        $data=Reservation::find($id);
        $data->delete();
        return redirect()->route('admin_reservation')->with('info','Rezervasyonunuz Silinmiştir.');
    }

    public function onay(){
        $data = DB::table( 'reservations')->get()->where('status','=','Rezervasyon Onaylandı');
        return view('admin.reservation_onay',['data' => $data]);

    }

    public function red(){
        $data = DB::table( 'reservations')->get()->where('status','=','Rezervasyon İptal Edildi');
        return view('admin.reservation_red',['data' => $data]);

    }




}
