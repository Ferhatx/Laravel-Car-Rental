<head>
<link href="{{asset('assets')}}/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet">

<!-- Custom styles for this template-->
<link href="{{asset('assets')}}/admin/css/sb-admin-2.min.css" rel="stylesheet">
<link href="{{asset('assets')}}/admin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">


</head>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Reservation Detail</h1>
    <div class="card shadow mb-4">
        <div class="card-body">
            <form class="user" action="{{route('admin_reservation_update',['id'=>$data->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                        @include('home.message')
                <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
                <script>
                    CKEDITOR.replace( 'note_icerik' );
                </script>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" BORDER="1">


                                <tr><th>Id</th><td>{{$data->id}}</td></tr>
                                <tr><th>Kullanıcı</th><td>{{$data->user->name}}</td></tr>
                                <tr><th>Car</th><td>{{$data->car_id}}</td></tr>
                                <tr><th>Alış Ofis</th><td>{{$data->alis_ofis}}</td></tr>
                                <tr><th>Dönüş Ofis</th><td>{{$data->donus_ofis}}</td></tr>
                                <tr><th>Rezervasyon Tarihi ve Saati</th><td>{{$data->rezdate}}-{{$data->reztime}}</td></tr>
                                <tr><th>Dönüş Tarihi ve Saati</th><td>{{$data->returndate}}-{{$data->returntime}}</td></tr>
                                <tr><th>Kiralık Gün</th><td>{{$data->days}}</td></tr>
                                <tr><th>Ücret(Kdv Dahil)</th><td>{{$data->total}}</td></tr>
                                <tr><th>Admin Mesajı</th><td><textarea id="editor1" name="note_icerik" rows="10" cols="50">{{$data->note}}</textarea></td><tr>
                                <tr><th>İp Adress</th><td>{{$data->ip}}</td>></tr>
                                <tr><th>Status</th>
                                    <td>
                                        <select name="status" id="form-contol">
                                            <option value="Rezervasyon Onaylandı" selected="selected">Rezervasyon Onaylandı</option>
                                            <option value="Rezervasyon İptal Edildi">Rezervasyon İptal Edildi</option>
                                        </select>

                                    </td></tr>


                                <tr><th colspan="1"></th><td><button class="btn btn-primary" type="submit">Mesaj Gönder</button></td></tr>



                            </table>
                        </div>


            </form>
        </div>

</div>
<!-- /.container-fluid -->

</div>
