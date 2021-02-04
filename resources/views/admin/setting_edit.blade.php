@extends('layouts.admin')

@section('title', 'X Rent A Car Admin Panel')

@section("content")
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Ayarları Güncelle</h1>
    <div class="card shadow mb-4">
        <div class="card-body">
            <form class="user" action="{{route('admin_setting_update')}}" method="post">
                @csrf
            <div class="form-group">
                <input type="hidden" name="id" value="{{$data->id}}" class="form-control form-control-user" id="exampleFirstName" size="10" placeholder="Title" required />
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
                <label>Company</label>
                <input type="text" name="company" value="{{$data->company}}" class="form-control form-control-user" id="exampleFirstName" size="10" placeholder="Company" required />
            </div>

                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="address" value="{{$data->address}}" class="form-control form-control-user" id="exampleFirstName" size="10" placeholder="Address" required />
                </div>

                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" name="phone" value="{{$data->phone}}" class="form-control form-control-user" id="exampleFirstName" size="10" placeholder="Phone" required />
                </div>

                <div class="form-group">
                    <label>Fax</label>
                    <input type="text" name="fax" value="{{$data->fax}}" class="form-control form-control-user" id="exampleFirstName" size="10" placeholder="Fax" required />
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" value="{{$data->email}}" class="form-control form-control-user" id="exampleFirstName" size="10" placeholder="Email" required />
                </div>
                <div class="form-group">
                    <label>Smtp Server</label>
                    <input type="text" name="smtpserver" value="{{$data->smtpserver}}" class="form-control form-control-user" id="exampleFirstName" size="10" placeholder="Smtpserver" required />
                </div>
                <div class="form-group">
                    <label>Smtp Email</label>
                    <input type="text" name="smtpemail" value="{{$data->smtpemail}}" class="form-control form-control-user" id="exampleFirstName" size="10" placeholder="Smtpemail" required />
                </div>
                <div class="form-group">
                    <label>Smtp Port</label>
                    <input type="text" name="smtpport" value="{{$data->smtpport}}" class="form-control form-control-user" id="exampleFirstName" size="10" placeholder="Smtpserver Portunu Giriniz" required />
                </div>
                <div class="form-group">
                    <label>Facebook</label>
                    <input type="text" name="facebook" value="{{$data->facebook}}" class="form-control form-control-user" id="exampleFirstName" size="10" placeholder="Slug" required />
                </div>
                <div class="form-group">
                    <label>Instagram</label>
                    <input type="text" name="instagram" value="{{$data->instagram}}" class="form-control form-control-user" id="exampleFirstName" size="10" placeholder="Instagram" required />
                </div>
                <div class="form-group">
                    <label>Twitter</label>
                    <input type="text" name="twitter" value="{{$data->twitter}}" class="form-control form-control-user" id="exampleFirstName" size="10" placeholder="Twitter" required />
                </div>
                <div class="form-group">
                    <label>Youtube</label>
                    <input type="text" name="youtube" value="{{$data->youtube}}" class="form-control form-control-user" id="exampleFirstName" size="10" placeholder="Youtube" required />
                </div>


            <button class="btn btn-primary" type="submit">Güncelle</button>
            </form>
        </div>

</div>
<!-- /.container-fluid -->
@endsection
