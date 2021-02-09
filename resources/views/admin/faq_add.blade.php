@extends('layouts.admin')

@section('title', 'X Rent A Car Admin Panel')

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet"/>
@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
    $(document).ready(function() {
        $('#faq_editor').summernote(
            {
                height: 250,   //set editable area's height
                codemirror: { // codemirror options
                    theme: 'monokai'
                }
            });
    });
</script>
@endsection

@section("content")
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Soru Ekle</h1>
    <div class="card shadow mb-4">
        <div class="card-body">
            <form class="user" action="{{route('admin_faq_store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Position</label>
                    <input type="text" name="position" class="form-control form-control-user" id="exampleFirstName" size="10" placeholder="Position" required />
                </div>
            <div class="form-group">
                <label>Soru</label>
                <input type="text" name="question" class="form-control form-control-user" id="exampleFirstName" size="10" placeholder="Soru Giriniz..." required />
            </div>
            <div class="form-group">
                <label>Cevap</label>
                <textarea id="faq_editor" name="answer_icerik" ></textarea>
            </div>
                <div class="form-group">
                    <label>Status</label>
                    <select name="status" class="form-control">
                        <option value="True">True</option>
                        <option value="False">False</option>
                    </select>
                </div>
            <button class="btn btn-primary" type="submit">Soru Ekle</button>
            </form>
        </div>

</div>
<!-- /.container-fluid -->
@endsection
