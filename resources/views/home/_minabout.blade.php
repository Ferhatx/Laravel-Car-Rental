<div class="best-features">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Online Rezervasyon</h2>
                </div>
            </div>
            <div class="col-md-8">
                <div class="left-content">
@include('home.message')
                    <div class="contact-form">
                        <form  action="{{route('reservation')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    Araçlarımız
                                    <fieldset>
                                        <select name="car_id" class="form-control" id="arac" required="">
                                            <option>Lütfen Aracınızı Seçiniz</option>
                                            @foreach($data2 as $rs2)
                                            <option value="{{$rs2->title}}">{{$rs2->title}}</option>
                                            @endforeach
                                        </select>
                                    </fieldset>
                                    <input type="hidden" name="price" value="{{$rs2->price}}">
                                    <input name="ipaddres" type="hidden" class="form-control" value="@php echo $_SERVER["REMOTE_ADDR"]; @endphp" id="name">
                                </div>
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

                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="filled-button">Rezervasyonu Oluştur</button>
                                    </fieldset>
                                </div>

                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
