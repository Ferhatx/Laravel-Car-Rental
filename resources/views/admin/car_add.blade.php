@extends('layouts.admin')

@section('title', 'X Rent A Car Admin Panel')

@section("content")
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Araç Ekle</h1>
    <div class="card shadow mb-4">
        <div class="card-body">
            <form class="user" action="{{route('admin_car_store')}}" method="post" enctype="multipart/form-data">
                @csrf
            <div class="form-group">
                <label>Category</label>
                <select name="category_id" class="form-control">
                    <option>Main Kategotinizi Seçiniz</option>
                    @foreach($datalist as $rs)
                    <option value="{{$rs->title}}">{{$rs->title}}</option>
                    @endforeach
                </select>
            </div>

                <div class="form-group">
                    <label>Alt Category</label>
                    <select name="sub_category_id" class="form-control">
                        <option>Alt Kategotinizi Seçiniz</option>
                        @foreach($datalist2 as $rs2)
                            <option value="{{$rs2->title}}">{{$rs2->title}}</option>
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
                <label>Araç Modeli</label>
                <input type="text" name="modeli" class="form-control form-control-user" id="exampleFirstName" size="10" placeholder="Araç Modeliniz" required />
            </div>
                <div class="form-group">
                    <label>Ücret</label>
                    <input type="text" name="price" class="form-control form-control-user" id="exampleFirstName" size="10" placeholder="Günlük Kiralama Ücret" required />
                </div>
                <div class="form-group">
                    <label>Yakıt</label>
                    <select name="yakit" class="form-control">
                        <option value="Benzinli">Benzinli</option>
                        <option value="Dizel">Dizel</option>
                        <option value="Elektirikli">Elektirikli</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Vites</label>
                    <select name="vites" class="form-control">
                        <option value="Manuel">Otomatik</option>
                        <option value="Manuel">Manuel</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Klima</label>
                    <select name="klima" class="form-control">
                        <option value="True">True</option>
                        <option value="False">False</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Kaç Kişilik</label>
                        <input type="text" name="kisilik" class="form-control form-control-user" id="exampleFirstName" size="10" placeholder="Kaç Kişilik" required />
                </div>
                <div class="form-group">
                    <label>Kapı</label>
                    <input type="text" name="kapi" class="form-control form-control-user" id="exampleFirstName" size="10" placeholder="Kapı Sayısı" required />
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
                <label>Resim</label>
                <input type="file" name="image"  class="form-control">
            </div>
            <button class="btn btn-primary" type="submit">Araç Ekle</button>
            </form>
        </div>

</div>
<!-- /.container-fluid -->
@endsection
