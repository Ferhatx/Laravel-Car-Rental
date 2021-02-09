@extends('layouts.admin')

@section('title', 'X Rent A Car Admin Panel')

@section("content")
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Sıkça Sorulan Sorular</h1>
@include('home.message')

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <a href="{{route('admin_faq_add')}}" class="btn btn-success btn-icon-split" style="margin-left:350px; ">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                            <span class="text">Soru Ekle</span>
                        </a><br/>
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Question</th>
                            <th>Answer</th>
                            <th>Position</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $rs)
                            <tr>

                                <td>{{$rs->id}}</td>
                                <td>{{$rs->question}}</td>
                                <td>{{$rs->answer}}</td>
                                <td>{{$rs->position}}</td>
                                <td>{{$rs->status}}</td>
                                <td>
                                    <a title="Düzenle" href="{{route('admin_faq_edit',['id'=>$rs->id])}}" class="btn btn-sm btn-primary"><i class="fa fa-pen"></i></a>
                                    <a title="Sil" href="{{route('admin_faq_delete',['id'=>$rs->id])}}" class="btn btn-sm btn-danger" onclick="return confirm('Silmek İstediğinizden Emin Misiniz?')"><i class="fas fa-trash"></i></a></td>
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


