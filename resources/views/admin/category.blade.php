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
                            <th colspan="2">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($datalist as $rs)
                        <tr>

                            <td>{{$rs->id}}</td>
                            <td>{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}</td>
                            <td>{{$rs->title}}</td>
                            <td>{{$rs->status}}</td>
                            <td><a title="Düzenle" href="{{route('admin_category_edit',['id'=>$rs->id])}}" class="btn btn-sm btn-primary"><i class="fa fa-pen"></i></a> </td>
                            <td><a title="Sil" href="{{route('admin_category_delete',['id'=>$rs->id])}}" class="btn btn-sm btn-danger" onclick="return confirm('Silmek İstediğinizden Emin Misiniz?')"><i class="fa fa-times"></i></a> </td>
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


