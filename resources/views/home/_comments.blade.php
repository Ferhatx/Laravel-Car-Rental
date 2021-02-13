<div class="happy-clients">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Yorumlar</h2>
                </div>
            </div>
            <div class="col-md-12">
                <div class="owl-clients owl-carousel text-center">

                   @foreach($data3 as $rs3)
                    <div class="service-item">
                        <div class="icon">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="down-content">
                            <h4>{{$rs3->user_id}}</h4>
                            <p class="n-m"><em>{{$rs3->review}}</em></p>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
</div>
