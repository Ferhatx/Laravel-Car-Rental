@extends('layouts.admin')

@section('title', 'X Rent A Car Admin Panel')

@section("content")
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Kategori Güncelle</h1>
    <div class="card shadow mb-4">
        <div class="card-body">
            <form class="user" action="{{route('admin_category_update',['id'=>$data->id])}}" method="post">
                @csrf
            <div class="form-group">
                <label>Parents</label>
                <select name="parent_id" class="form-control">
                    @foreach($datalist as $rs)<!-- burada otomatik olarak istediğimiz parent id geldi seçili -->

                        <option value="{{$rs->id}}" @if($rs->id==$data->parent_id) selected="selected"@endif>
                        {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                        @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" value="{{$data->title}}" class="form-control form-control-user" id="exampleFirstName" size="10" placeholder="Title" required />
            </div>
            <div class="form-group">
                <label>Keywords</label>
                <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control form-control-user" id="exampleFirstName" size="10" placeholder="Keywords" required />
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="text" name="description" value="{{$data->description}}"class="form-control form-control-user" id="exampleFirstName" size="10" placeholder="Description" required />
            </div>
            <div class="form-group">
                <label>Slug</label>
                <input type="text" name="slug" value="{{$data->slug}}" class="form-control form-control-user" id="exampleFirstName" size="10" placeholder="Slug" required />
            </div>
                <div class="form-group">
                    <label>Status</label>
                    <select name="status" class="form-control">
                        <option value="{{$data->status}}" selected="selected">{{$data->status}}</option>
                        <option value="True">True</option>
                        <option value="False">False</option>
                    </select>
                </div>
            <div class="form-group">
                <label>İMAGE SONRADAN EKLE</label>
            </div>
            <button class="btn btn-primary" type="submit">Kategori Güncelle</button>
            </form>
        </div>

</div>
<!-- /.container-fluid -->
@endsection
