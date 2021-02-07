@extends('layouts.admin')

@section('title', 'X Rent A Car Admin Panel')

@section("content")
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Araçlar</h1>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <a href="{{route('admin_car_add')}}" class="btn btn-success btn-icon-split" style="margin-left:350px; ">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                            <span class="text">Yeni Araç Ekle</span>
                        </a><br/>
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Category ID</th>
                            <th>Title</th>
                            <th>Model</th>
                            <th>Ücret</th>
                            <th>Resim</th>
                            <th>Status</th>
                            <th colspan="2">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($datalist as $rs)
                        <tr>

                            <td>{{$rs->id}}</td>
                            <td>{{$rs->category->title}}</td>
                            <td>{{$rs->title}}</td>
                            <td>{{$rs->modeli}}</td>
                            <td>{{$rs->price}} ₺</td>
                            <td>
                                @if($rs->image)
                                    <img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" height="30px" width="30px"/>
                                @endif
                            </td>
                            <td>{{$rs->status}}</td>
                            <td>
                                <a title="Düzenle" href="{{route('admin_car_edit',['id'=>$rs->id])}}" class="btn btn-sm btn-primary"><i class="fa fa-pen"></i></a></td>
                              <td><a title="Sil" href="{{route('admin_car_delete',['id'=>$rs->id])}}" class="btn btn-sm btn-danger" onclick="return confirm('Silmek İstediğinizden Emin Misiniz?')"><i class="fas fa-trash"></i></td>
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


