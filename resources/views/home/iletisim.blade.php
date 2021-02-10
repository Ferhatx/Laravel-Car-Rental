@extends('layouts.home')

@section("content")
    @php
        $settings=\App\Http\Controllers\HomeController::getSetting();
        $page=\App\Http\Controllers\HomeController::getPage();
    @endphp
    <!-- Page Content -->
    <div class="page-heading contact-heading header-text" style="background-image: url({{asset('assets')}}/assets/images/heading-5-1920x500.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h2>İLETİŞİM</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="find-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Merkez Ofis</h2>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="left-content">
                        {!! $page->iletisim !!}
                        <br/>
                        <ul class="social-icons">
                            <li><a href="{{$settings->facebook}}" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{$settings->twitter}}" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="{{$settings->instagram}}" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="{{$settings->youtube}}" title="Youtube"><i class="fa fa-youtube-square"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="send-message">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>İletişim Formu</h2>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="contact-form">
                        @include('home.message')
                        <form  action="{{route('sendmessage')}}" method="post" enctype="multipart/form-data">
                        <div class="row">
                                    @csrf
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="name" type="text" class="form-control" id="name" placeholder="Adınız ve Soyadınız" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="email" type="text" class="form-control" id="email" placeholder="E-Mail Addresiniz" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="phone" type="text" class="form-control" id="phone" placeholder="Telefon Numarınız" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="subject" type="text" class="form-control" id="subject" placeholder="Konu" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" rows="6" class="form-control" id="message" placeholder="Mesajınız" required=""></textarea>
                                    </fieldset>
                                </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="ipaddres" type="hidden" class="form-control" value="@php echo $_SERVER["REMOTE_ADDR"]; @endphp" id="name">
                                </fieldset>
                            </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="filled-button">Mesajı Gönder</button>
                                    </fieldset>

                                </div>

                            </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>







@endsection
