@extends('layouts.admin')

@section('title', 'X Rent A Car Admin Panel')

@section("content")
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Galeri Resim Ekle</h1>
    <div class="card shadow mb-4">
        <div class="card-body">
            <form class="user" action="{{route('admin_image_store',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                @csrf
            <div class="form-group">
                <label>{{$data->category_id}}/{{$data->sub_category_id}}/{{$data->title}}</label>
            </div>
                <input type="hidden"  name="category_id" value="{{$data->category_id}}">
                <input type="hidden"  name="sub_category_id" value="{{$data->sub_category_id}}">
                <input type="hidden"  name="category_title" value="{{$data->title}}">

            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control form-control-user" id="exampleFirstName" size="10" placeholder="Title" required />
            </div>
            <div class="form-group">
                <label>Resim</label>
                <input type="file" name="image"  class="form-control">
            </div>
            <button class="btn btn-primary" type="submit">Galeri Resim Ekle</button>
            </form>
<br/>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($datalist as $rs)
                    <tr>
                        <td>{{$rs->id}}</td>
                        <td>{{$rs->title}}</td>
                        <td>
                            @if($rs->image)
                                <img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" height="30px" width="30px"/>
                            @endif
                        </td>
                        <td><a title="Sil" href="{{route('admin_image_delete',['id'=>$rs->id])}}" class="btn btn-sm btn-danger" onclick="return confirm('Silmek İstediğinizden Emin Misiniz?')"><i class="fas fa-trash"></i></a></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>













        </div>











</div>
<!-- /.container-fluid -->
@endsection
