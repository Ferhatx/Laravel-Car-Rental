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

                    <div class="contact-form">
                        <form  action="" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    Alış Ofisi
                                    <fieldset>
                                        <select name="alisofisi" class="form-control" id="alisofisi" required="">
                                            <option value="#">Alış Ofisini Seçiniz</option>
                                            <option value="Mersin">Mersin</option>
                                            <option value="Tarsus">Tarsus</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                     Alış Tarihi
                                    <fieldset>
                                        <input type="date" id="alistarihi" name="alistarihi" class="form-control">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    Alış Saati
                                    <fieldset>
                                        <input type="time" id="alissaati" name="alissaati" class="form-control">
                                    </fieldset>
                                </div>


                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    Dönüş Ofisi
                                    <fieldset>
                                        <select name="donusofisi" class="form-control" id="donusofisi" required="">
                                            <option value="#">Dönüş Ofisini Seçiniz</option>
                                            <option value="Mersin">Mersin</option>
                                            <option value="Tarsus">Tarsus</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    Dönüş Tarihi
                                    <fieldset>
                                        <input type="date" id="donustarihi" name="donustarihi" class="form-control">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    Dönüş Saati
                                    <fieldset>
                                        <input type="time" id="donussaati" name="donussaati" class="form-control">
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
