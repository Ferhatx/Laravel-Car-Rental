@extends('layouts.home')

@section("content")

    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url({{asset('assets')}}/assets/images/heading-5-1920x500.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h2>REZERVASYONLAR</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="team-members">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>REZERVASYONLARIM</h2>
                    </div>
                    <center><h3>REZARVASYON LİSTESİ</caption></center>
                    <table border=1 bordercolor="Gray" >

                        <tr>
                            <th width="150">Rezerve Edilen Araç</th>
                            <th width="100">Alış Ofis</th>
                            <th width="100">Randevu Alış Tarihi ve Saat</th>
                            <th width="100">Dönüş Ofis</th>
                            <th width="100">Randevu Dönüş Tarihi ve Saat</th>
                            <th width="100">Rezerve Talep Gün Sayısı</th>
                            <th width="100">Rezervasyon Durumu</th>
                            <th width="100">Toplam Ücret</th>
                            <th width="100">Admin Mesaj</th>
                        </tr>
                        @foreach($data as $rs)
                        <tr>
                            <td>{{$rs->car_id}}</td>
                            <td>{{$rs->alis_ofis}}</td>
                            <td>{{$rs->rezdate}} - {{$rs->reztime}}</td>
                            <td>{{$rs->donus_ofis}}</td>
                            <td>{{$rs->returndate}} - {{$rs->returntime}}</td>
                            <td>{{$rs->days}}</td>
                            <td>{{$rs->status}}</td>
                            <td>{{$rs->total}} ₺</td>
                            <td>{{$rs->note}}</td>
                        </tr>
                        @endforeach

                    </table>
                </div>
            </div>
        </div>
@endsection
