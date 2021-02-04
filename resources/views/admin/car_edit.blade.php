@extends('layouts.admin')

@section('title', 'X Rent A Car Admin Panel')

@section("content")
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Araç Güncelle</h1>
    <div class="card shadow mb-4">
        <div class="card-body">
            <form class="user" action="{{route('admin_car_update',['id'=>$data->id])}}" method="POST" enctype="multipart/form-data">
                @csrf

            <div class="form-group">
                <label>Category</label>
                <select name="category_id" class="form-control">
                    @foreach($datalist as $rs)<!-- burada otomatik olarak istediğimiz parent id geldi seçili -->
                    <option value="{{$rs->id}}" @if($rs->id==$data->category_id) selected="selected"@endif>{{$rs->title}}</option>
                    @endforeach
                </select>
            </div>

                <div class="form-group">
                    <label>Alt Category</label>
                    <select name="sub_category_id" class="form-control">
                        @foreach($datalist2 as $rs2)
                            <option value="{{$rs2->id}}" @if($rs2->id==$data->sub_category_id) selected="selected"@endif>{{$rs2->title}}</option>
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
                    <label>Araç Modeli</label>
                    <input type="text" name="modeli" value="{{$data->modeli}}"  class="form-control form-control-user" id="exampleFirstName" size="10" placeholder="Araç Modeliniz" required />
                </div>

                <div class="form-group">
                    <label>Ücret</label>
                    <input type="text" name="price" value="{{$data->price}}" class="form-control form-control-user" id="exampleFirstName" size="10" placeholder="Günlük Kiralama Ücret" required />
                </div>

                <div class="form-group">
                    <label>Yakıt</label>
                    <select name="yakit" class="form-control">
                        <option value="{{$data->yakit}}" selected="selected">{{$data->yakit}}</option>
                        <option value="Benzinli">Benzinli</option>
                        <option value="Dizel">Dizel</option>
                        <option value="Elektirikli">Elektirikli</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Vites</label>
                    <select name="vites" class="form-control">
                        <option value="{{$data->vites}}" selected="selected">{{$data->vites}}</option>
                        <option value="Manuel">Otomatik</option>
                        <option value="Manuel">Manuel</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Klima</label>
                    <select name="klima" class="form-control">
                        <option value="{{$data->klima}}" selected="selected">{{$data->klima}}</option>
                        <option value="True">True</option>
                        <option value="False">False</option>
                    </select>
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
                <label>Resim</label>
                <input type="file" name="image" value="{{$data->image}}"  class="form-control">
               <label>
                   @if($data->image)
                        <img src="{{Storage::url($data->image)}}" height="30px" width="30px"/>
                    @endif
                </label>
            </div>
            <button class="btn btn-primary" type="submit">Araç Güncelle</button>
            </form>
        </div>

</div>
<!-- /.container-fluid -->
@endsection
