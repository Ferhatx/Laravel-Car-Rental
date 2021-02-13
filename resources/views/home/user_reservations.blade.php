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
@include('home.message')
    <div class="team-members">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>REZERVASYONLARIM</h2>
                    </div>
                    <center><h3>REZARVASYON LİSTESİ</h3></center>
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
                            <th width="100">Actions</th>
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
                            <td>
                                <a title="Sil" href="{{route('reservation_cancel',['id'=>$rs->id])}}" class="btn btn-sm btn-danger" onclick="return confirm('Rezervasyonunuzu İptal Etmek İstediğinizden Emin Misiniz?')">İptal</a></td>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>


        <div class="team-members">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <h2>YORUMLAR</h2>
                        </div>
                        <center><h3>YORUMLAR LİSTESİ</h3></center>
                        <table border=1 bordercolor="Gray" >

                            <tr>
                                <th width="150">Id</th>
                                <th width="100">Kullanıcı</th>
                                <th width="100">Yorum Yapılan Araç</th>
                                <th width="100">Konu</th>
                                <th width="100">Yorum</th>
                                <th width="100">Ip</th>
                                <th width="100">Status</th>
                                <th width="100">Actions</th>
                            </tr>
                            @foreach($data2 as $rs2)
                                <tr>
                                    <td>{{$rs2->id}}</td>
                                    <td>{{$rs2->user_id}}</td>
                                    <td>{{$rs2->category_id}}</td>
                                    <td>{{$rs2->subject}}</td>
                                    <td>{{$rs2->review}}</td>
                                    <td>{{$rs2->IP}}</td>
                                    <td>{{$rs2->status}}</td>
                                    <td>
                                        <a title="Sil" href="{{route('yorum_sil',['id'=>$rs2->id])}}" class="btn btn-sm btn-danger" onclick="return confirm('Yorumu Silmek İstediğinizden Emin Misiniz?')">Sil</a></td>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>


@endsection
