@extends('layouts.admin')

@section('title', 'X Rent A Car Admin Panel')

@section("content")


    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Rezervasyonlar</h1>
@include('home.message')

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Kullanıcı</th>
                            <th>Car</th>
                            <th>Alış Ofis</th>
                            <th>Dönüş Ofis</th>
                            <th>Rezervasyon Tarihi ve Saati</th>
                            <th>Dönüş Tarihi ve Saati</th>
                            <th>Kiralık Gün</th>
                            <th>Ücret(Kdv Dahil)</th>
                            <th>Admin Mesaj</th>
                            <th>Status</th>
                            <th>İp Adress</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $rs)
                        <tr>
                            <td>{{$rs->id}}</td>
                            <td>{{$rs->user->name}}</td>
                            <td>{{$rs->car_id}}</td>
                            <td>{{$rs->alis_ofis}}</td>
                            <td>{{$rs->donus_ofis}}</td>
                            <td>{{$rs->rezdate}}-{{$rs->reztime}}</td>
                            <td>{{$rs->returndate}}-{{$rs->returntime}}</td>
                            <td>{{$rs->days}}</td>
                            <td>{{$rs->total}}</td>
                            <td>{{$rs->note}}</td>
                            <td>{{$rs->status}}</td>
                            <td>{{$rs->ip}}</td>
                            <td>
                             <a title="Rezervasyon Kontrol" target="_blank" href="{{route('admin_reservation_edit',['id'=>$rs->id])}}" class="btn btn-sm btn-primary"><i class="fa fa-pen"></i></a>
                            <a title="Sil" href="{{route('admin_reservation_delete',['id'=>$rs->id])}}" class="btn btn-sm btn-danger" onclick="return confirm('Silmek İstediğinizden Emin Misiniz?')"><i class="fas fa-trash"></i></a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection


