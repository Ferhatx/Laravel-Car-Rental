@extends('layouts.home')

@section("content")
    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url({{asset('assets')}}/assets/images/heading-5-1920x500.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h2>ARAZİ Araçlarımız</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="products">
        <div class="container">
            <div class="row">
                @foreach($data as $rs)
                <div class="col-md-4">

                    <div class="product-item">

                        <img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" height="270px" width="370px"/>
                        <div class="down-content">
                            <h4>{{$rs->title}}</h4>
                            <h6><small>Günlük Kiralama ücreti</small> {{$rs->price}} ₺</h6>
                            <h6><small>Arabanın Detaylarını Görmek İçin</small> <a href="{{route('otomobil_detay',['id'=>$rs->id])}}">Tıklayın</a></h6>
                        </div>

                    </div>

                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
