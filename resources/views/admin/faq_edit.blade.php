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
    <h1 class="h3 mb-4 text-gray-800">FAQ Güncelle</h1>
    <div class="card shadow mb-4">
        <div class="card-body">
            <form class="user" action="{{route('admin_faq_update',['id'=>$data->id])}}" method="POST" enctype="multipart/form-data">
                @csrf

            <div class="form-group">
                <label>Position</label>
                <input type="text" name="position" value="{{$data->position}}" class="form-control form-control-user" id="exampleFirstName" size="10" placeholder="Title" required />
            </div>
            <div class="form-group">
                <label>Question</label>
                <input type="text" name="question" value="{{$data->question}}" class="form-control form-control-user" id="exampleFirstName" size="10" placeholder="Keywords" required />
            </div>
                <div class="form-group">
                    <label>Cevap</label>
                    <textarea id="faq_editor" name="answer_icerik">{{$data->answer}}</textarea>
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <select name="status" class="form-control">
                        <option value="{{$data->status}}" selected="selected">{{$data->status}}</option>
                        <option value="True">True</option>
                        <option value="False">False</option>
                    </select>
                </div>
            <button class="btn btn-primary" type="submit">Faq Güncelle</button>
            </form>
        </div>

</div>
<!-- /.container-fluid -->
@endsection
