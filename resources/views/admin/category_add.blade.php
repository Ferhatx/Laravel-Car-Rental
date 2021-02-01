@extends('layouts.admin')

@section('title', 'X Rent A Car Admin Panel')

@section("content")
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Kategori Ekle</h1>
    <div class="card shadow mb-4">
        <div class="card-body">
            <form class="user" action="{{route('admin_category_create')}}" method="post">
                @csrf
            <div class="form-group">
                <label>Parents</label>
                <select name="parent_id" class="form-control">
                    <option>Main Kategotinizi Seçiniz</option>
                    @foreach($datalist as $rs)
                    <option value="{{$rs->id}}">{{$rs->title}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control form-control-user" id="exampleFirstName" size="10" placeholder="Title" required />
            </div>
            <div class="form-group">
                <label>Keywords</label>
                <input type="text" name="keywords" class="form-control form-control-user" id="exampleFirstName" size="10" placeholder="Keywords" required />
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="text" name="description" class="form-control form-control-user" id="exampleFirstName" size="10" placeholder="Description" required />
            </div>
            <div class="form-group">
                <label>Slug</label>
                <input type="text" name="slug" class="form-control form-control-user" id="exampleFirstName" size="10" placeholder="Slug" required />
            </div>
                <div class="form-group">
                    <label>Status</label>
                    <select name="status" class="form-control">
                        <option value="True">True</option>
                        <option value="False">False</option>
                    </select>
                </div>
            <div class="form-group">
                <label>İMAGE SONRADAN EKLE</label>
            </div>
            <button class="btn btn-primary" type="submit">Add Category</button>
            </form>
        </div>

</div>
<!-- /.container-fluid -->
@endsection
