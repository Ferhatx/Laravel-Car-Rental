@extends('layouts.home')

@section('js1')
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
            $( "#accordion" ).accordion();
        } );
    </script>
@endsection
@section('css1')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
@endsection

@section("content")
    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url({{asset('assets')}}/assets/images/heading-5-1920x500.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h2>SIKÇA SORULAN SORULAR</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="team-members">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>SIKÇA SORULAN SORULAR</h2>
                    </div>
                    <div id="accordion">
                        @foreach($datalist as $rs)
                        <h3>{{$rs->question}}</h3>
                        <div>
                            <p>{!! $rs->answer !!}</p>
                        </div>
                        @endforeach
            </div>
        </div>
@endsection
