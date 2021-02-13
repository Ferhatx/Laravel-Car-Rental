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
            <form class="user" action="{{route('admin_review_update',['id'=>$data->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                        @include('home.message')
                <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
                <script>
                    CKEDITOR.replace( 'note_icerik' );
                </script>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" BORDER="1">


                                <tr><th>Id</th><td>{{$data->id}}</td></tr>
                                <tr><th>Kullanıcı</th><td>{{$data->user_id}}</td></tr>
                                <tr><th>Yorum Yapılan Araç</th><td>{{$data->category_id}}</td></tr>
                                <tr><th>Konu</th><td>{{$data->subject}}</td></tr>
                                <tr><th>Yorum</th><td>{{$data->review}}</td></tr>
                                <tr><th>İp adresi</th><td>{{$data->IP}}</td></tr>
                                <tr><th>Status</th>
                                    <td>
                                        <select name="status" id="form-contol">
                                            <option value="New" selected="selected">New</option>
                                            <option value="True">True</option>
                                            <option value="False">False</option>
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
