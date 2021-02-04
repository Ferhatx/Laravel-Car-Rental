@extends('layouts.admin')

@section('title', 'X Rent A Car Admin Panel')

@section("content")
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Galeri Resim Ekle</h1>
    <div class="card shadow mb-4">
        <div class="card-body">
            <form class="user" action="{{route('admin_image_store')}}" method="post" enctype="multipart/form-data">
                @csrf
            <div class="form-group">
                <label>Category</label>
                <select name="category_id" class="form-control">
                    <option>Main Kategotinizi Seçiniz</option>
                    @foreach($datalist as $rs)
                    <option value="{{$rs->id}}">{{$rs->title}}</option>
                    @endforeach
                </select>
            </div>
                <div class="form-group">
                    <label>Alt Category</label>
                    <select name="sub_category_id" class="form-control">
                        <option>Alt Kategotinizi Seçiniz</option>
                        @foreach($datalist2 as $rs2)
                            <option value="{{$rs2->id}}">{{$rs2->title}}</option>
                        @endforeach
                    </select>
                </div>
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
        </div>

</div>
<!-- /.container-fluid -->
@endsection
