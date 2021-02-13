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
                            <div><b>Klima : </b>{{$data->klima}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>Vites</b> : {{$data->vites}}<div>
                                    <div><b>Kapı Sayısı : </b>{{$data->kapi}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>Kisilik</b> : {{$data->kisilik}}<div>
                                            <br/>

                </div>
            </div>
        </div>

<br/>

                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="text-content">
                                        <h2>Yorumlar</h2>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @foreach($datalist2 as $rs2)
                            <div class="col-md-4">

                                @if(!empty($rs2))
                                    <div class="service-item">
                                        <div class="icon">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <div class="down-content">
                                            <h4>{{$rs2->user_id}}</h4>
                                            <p class="n-m"><em>{{$rs2->review}}</em></p>
                                        </div>
                                    </div>

                                @else
                                    <div style="margin: 0 auto;"><i>Yorum Yok</i></div>
                                @endif

                            </div>
                        @endforeach
                        <div class="send-message">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="section-heading">
                                            <h2>Rezarvasyon Oluşturun</h2>
                                        </div>



                                        <div class="contact-form">
                                            <form  action="{{route('reservation')}}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <input name="ipaddres" type="hidden" class="form-control" value="@php echo $_SERVER["REMOTE_ADDR"]; @endphp" id="name">
                                                    <input type="hidden"  name="price" class="form-control" value="{{$data->price}}">
                                                    <input type="hidden"  name="car_id" class="form-control" value="{{$data->title}}">

                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                        Alış Ofisi
                                                        <fieldset>
                                                            <select name="alis_ofis" class="form-control" id="alisofisi" required="">
                                                                <option value="#">Alış Ofisini Seçiniz</option>
                                                                <option value="Mersin">Mersin</option>
                                                                <option value="Tarsus">Tarsus</option>
                                                            </select>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                        Alış Tarihi
                                                        <fieldset>
                                                            <input type="date" id="rezdate" name="rezdate" class="form-control">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                        Alış Saati
                                                        <fieldset>
                                                            <input type="time" id="reztime" name="reztime" class="form-control">
                                                        </fieldset>
                                                    </div>


                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                        Dönüş Ofisi
                                                        <fieldset>
                                                            <select name="donus_ofis" class="form-control" id="donusofisi" required="">
                                                                <option value="#">Dönüş Ofisini Seçiniz</option>
                                                                <option value="Mersin">Mersin</option>
                                                                <option value="Tarsus">Tarsus</option>
                                                            </select>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                        Dönüş Tarihi
                                                        <fieldset>
                                                            <input type="date" id="returndate" name="returndate" class="form-control">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                        Dönüş Saati
                                                        <fieldset>
                                                            <input type="time" id="returntime" name="returntime" class="form-control">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                        <fieldset>
                                                            @auth
                                                                <button type="submit" id="form-submit" class="filled-button">Rezervasyonu Oluştur</button>
                                                            @else
                                                                <a href="/login" class="filled-button">Rezarvasyon Oluşturmak için Lütfen Giriş Yapın</a>
                                                            @endauth
                                                        </fieldset>
                                                    </div>



                                                </div>
                                            </form>
                                        </div>
                                    </div>


                                    <div>
                                        <form  action="{{route('yorum_kaydet',['id'=>$data->id])}}" method="post" enctype="multipart/form-data" class="filled-form">
                                        @csrf
                                    </div>
                                    <div class="col-md-6">
                                        <div class="section-heading">
                                            <h2>Yorum Yapın</h2>
                                        </div>
                                        <form  action="" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                Konu
                                                <fieldset>
                                                    <input type="text" id="yorum_konu" name="yorum_konu" class="form-control">
                                                </fieldset>
                                            </div>
                                            <br/>
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                Yorum İçeriği
                                                <fieldset>
                                                    <textarea id="yorum_icerik" name="yorum_icerik" class="form-control"></textarea>

                                                </fieldset>
                                            </div>
                                            <input type="hidden"  name="arac_id" class="form-control" value="{{$data->title}}">
                                            <br/>                                           <input name="IP" type="hidden" class="form-control" value="@php echo $_SERVER["REMOTE_ADDR"]; @endphp" id="name">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <fieldset>
                                                    @auth
                                                        <button type="submit" id="form-submit" class="filled-button">Yorum Yap</button>
                                                    @else
                                                        <a href="/login" class="filled-button">Yorum Yapmak için Lütfen Giriş Yapın</a>
                                                    @endauth
                                                </fieldset>
                                            </div>

                                    </div>
                                    </form>


                                </div>
                            </div>
                        </div>





@endsection
