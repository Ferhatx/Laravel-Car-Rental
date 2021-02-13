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
                            <th>Yorum Yapılan Araç</th>
                            <th>Konu</th>
                            <th>Yorum</th>
                            <th>Ip</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $rs)
                        <tr>
                            <td>{{$rs->id}}</td>
                            <td>{{$rs->user_id}}</td>
                            <td>{{$rs->category_id}}</td>
                            <td>{{$rs->subject}}</td>
                            <td>{{$rs->review}}</td>
                            <td>{{$rs->IP}}</td>
                            <td>{{$rs->status}}</td>
                            <td>
                            <a title="Sil" href="{{route('admin_review_delete',['id'=>$rs->id])}}" class="btn btn-sm btn-danger" onclick="return confirm('Silmek İstediğinizden Emin Misiniz?')"><i class="fas fa-trash"></i></a></td>
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


