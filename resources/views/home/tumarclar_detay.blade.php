@extends('layouts.home')

@section('css1')
    <link rel="stylesheet" href="{{asset('assets')}}/assets/css/lightbox.min.css">
@endsection

@section('js1')
    <script src="{{asset('assets')}}/assets/js/lightbox-plus-jquery.min.js"></script>
@endsection
@section("content")

    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url({{asset('assets')}}/assets/images/heading-5-1920x500.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h2>ARACIMIZIN DETAYLARI</h2>
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
                        <h2>{{$data->title}}</h2>
                    </div>
                            <section>
                                <div>
                               @foreach($datalist as $rs2)
                                        <a class="example-image-link" href="{{Storage::url($rs2->image)}}" data-lightbox="example-1"><img class="example-image" src="{{Storage::url($rs2->image)}}" alt="image-1" width="370px" height="270px"/></a>
                                    @endforeach
                                </div>
                            </section>
                    <br/><br/>
                    <div><h2>Aracın Özellikleri</h2></div>
                    <hr/>
                    <div> <b>Modeli</b> : {{$data->modeli}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Yakıt</b> : {{$data->yakit}}<div>
                            <div><b>Klima : {{$data->klima}} </b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>Vites</b> : {{$data->vites}}<div>
                                   <br/>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <button type="submit" id="form-submit" class="filled-button" onClick="location.href='{{route('anasayfa')}}'" >Rezervasyon  Oluştur</button>
                                        </fieldset>
                                    </div>
                                    </div>
                </div>
            </div>
        </div>
@endsection
