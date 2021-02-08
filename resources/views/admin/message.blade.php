@extends('layouts.admin')

@section('title', 'X Rent A Car Admin Panel')

@section("content")


    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">İletişim Mesajları</h1>
@include('home.message')

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Ad ve Soyad</th>
                            <th>E-mail</th>
                            <th>Telefon</th>
                            <th>Konu</th>
                            <th>Mesaj</th>
                            <th>Admin Mesajı</th>
                            <th>İp Adress</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($datalist as $rs)
                        <tr>
                            <td>{{$rs->id}}</td>
                            <td>{{$rs->name}}</td>
                            <td>{{$rs->email}}</td>
                            <td>{{$rs->phone}}</td>
                            <td>{{$rs->subject}}</td>
                            <td>{{$rs->message}}</td>
                            <td>{{$rs->note}}</td>
                            <td>{{$rs->ipaddres}}</td>
                            <td>{{$rs->status}}</td>
                            <td>
                             <a title="Mesaj Oku" target="_blank" href="{{route('admin_message_edit',['id'=>$rs->id])}}" class="btn btn-sm btn-primary"><i class="fa fa-pen"></i></a>
                            <a title="Sil" href="{{route('admin_message_delete',['id'=>$rs->id])}}" class="btn btn-sm btn-danger" onclick="return confirm('Silmek İstediğinizden Emin Misiniz?')"><i class="fas fa-trash"></i></a></td>
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


