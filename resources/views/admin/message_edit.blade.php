<head>
<link href="{{asset('assets')}}/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet">

<!-- Custom styles for this template-->
<link href="{{asset('assets')}}/admin/css/sb-admin-2.min.css" rel="stylesheet">
<link href="{{asset('assets')}}/admin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
</head>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Message Detail</h1>
    <div class="card shadow mb-4">
        <div class="card-body">
            <form class="user" action="{{route('admin_message_update',['id'=>$data->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                        @include('home.message')
                <script>
                    $(document).ready(function() {
                        $('#message_editor').summernote(
                            {
                                height: 300,   //set editable area's height
                                codemirror: { // codemirror options
                                    theme: 'monokai'
                                }
                            });
                </script>



                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" BORDER="1">


                                <tr><th>Id</th><td>{{$data->id}}</td></tr>
                                <tr><th>Ad ve Soyad</th><td>{{$data->name}}</td></tr>
                                <tr><th>E-mail</th><td>{{$data->email}}</td></tr>
                                <tr><th>Telefon</th><td>{{$data->phone}}</td></tr>
                                <tr><th>Konu</th><td>{{$data->subject}}</td></tr>
                                <tr><th>Mesaj</th><td>{{$data->message}}</td></tr>
                                <tr><th>Admin Mesajı</th><td><textarea id="message_editor" name="note_icerik" rows="10" cols="50">{{$data->note}}</textarea></td><tr>
                                <tr><th>Status</th><td>{{$data->status}}</td></tr>

                                <tr><th colspan="1"></th><td><button class="btn btn-primary" type="submit">Mesaj Gönder</button></td></tr>



                            </table>
                        </div>


            </form>
        </div>

</div>
<!-- /.container-fluid -->

</div>
