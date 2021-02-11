

<div id='search'>
    <form action='#' id='searchthis' method='post' style='display:inline;'>
        @csrf
        @livewire('search')
        <input id='search-btn' style='background: #F33F3F;  border: 2px outset #F33F3F;float:right; color: #ffffff; font-weight: bold;' type='submit' value='Ara'/>
        @livewireScripts
    </form>
</div>
<br/>
<div class="latest-products">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Araçlarımız</h2>
                    <a href="{{route('tumarclar')}}">Tüm Araçlar <i class="fa fa-angle-right"></i></a>
                </div>
            </div>

            </div>

            <div class="uclu_galeri owl-carousel owl-theme">
                @foreach($data2 as $rs3)

                    <div class="item">
                        <div class="product-item">
                            <a href="{{route('tumarclar_detay',['id'=>$rs3->id])}}"><img src="{{\Illuminate\Support\Facades\Storage::url($rs3->image)}}" alt=""></a>
                            <div class="down-content">
                                <h4>{{$rs3->title}}</h4>
                                <h6><small>Günlük Kiralama ücreti</small> {{$rs3->price}} ₺</h6>
                            </div>
                        </div>
                    </div>


                @endforeach
            </div>
        </div>
    </div>
</div>
