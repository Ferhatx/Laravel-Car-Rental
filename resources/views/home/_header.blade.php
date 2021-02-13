@php
    $parentCategories=\App\Http\Controllers\HomeController::categorylist()
@endphp
<!-- ***** Preloader Start ***** -->
<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!-- ***** Preloader End ***** -->

<!-- Header -->
<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href={{route('anasayfa')}}><h2><em> X </em> Rent A Car</h2></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href={{route('anasayfa')}}>Anasayfa
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Kurumsal</a>

                        <div class="dropdown-menu">

                                <a class="dropdown-item" href={{route('hakkimizda')}}>Hakkımızda</a>
                                <a class="dropdown-item" href={{route('vizyonumuz')}}>Vizyonumuz</a>
                                <a class="dropdown-item" href={{route('misyonumuz')}}>Misyonumuz</a>

                        </div>
                    </li>




                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Filomuz</a>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('otomobil')}}">Otomobil</a>
                            <a class="dropdown-item" href={{route('ticariaraclar')}}>Ticari Araç</a>
                            <a class="dropdown-item" href={{route('araziaraclar')}}>Arazi Araçları</a>
                            <a class="dropdown-item" href={{route('tumarclar')}}>Tüm Araçlar</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Bilgiler</a>

                        <div class="dropdown-menu">

                            <a class="dropdown-item" href="{{route('kiralama_sozlesmesi')}}">Kira Sözleşmesi</a>
                            <a class="dropdown-item" href={{route('kiralama_kosullari')}}>Kiralama Koşulları</a>
                            <a class="dropdown-item" href={{route('sikca_sorulan_sorular')}}>Sıkça Sorulan Sorular</a>

                        </div>
                    </li>


                    <li class="nav-item"><a class="nav-link" href={{route('iletisim')}}>İletişim</a></li>


                        @auth
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{{\Illuminate\Support\Facades\Auth::user()->name}}</a>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('myprofile')}}">Profilim</a>
                            <a class="dropdown-item" href="{{'user_reservations'}}">Kullanıcı İşlemlerim</a>
                            <a class="dropdown-item" href="{{route('logout')}}">Çıkış</a>
                        </div>
                        </li>
                    @endauth
                    @guest
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Giriş</a>

                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="/login">Login</a>
                                <a class="dropdown-item" href="/register">Kayıt</a>

                            </div>
                        </li>
                    @endguest






                </ul>
            </div>
        </div>
    </nav>
</header>
