@extends('layouts.admin')

@section('title', 'X Rent A Car Admin Panel')

@section("content")
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Kategorilerimiz</h1>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <a href="{{route('admin_category_add')}}" class="btn btn-success btn-icon-split" style="margin-left:350px; ">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                            <span class="text">Kategory Ekle</span>
                        </a><br/>
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Parent</th>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($datalist as $rs)
                        <tr>

                            <td>{{$rs->id}}</td>
                            <td>{{$rs->parent_id}}</td>
                            <td>{{$rs->title}}</td>
                            <td>{{$rs->status}}</td>
                            <td><a href="{{route('admin_category_edit',['id'=>$rs->id])}}">Düzenle</a> </td>
                            <td><a href="{{route('admin_category_delete',['id'=>$rs->id])}}" onclick="return confirm('Silmek İstediğinizden Emin Misiniz?')">Sil</a> </td>
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


