@extends('layouts.home')

@section("content")
    @php
        $page=\App\Http\Controllers\HomeController::getPage();
    @endphp
    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url({{asset('assets')}}/assets/images/heading-5-1920x500.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h2>MİSYONUMUZ</h2>
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
                        <h2>MİSYONUMUZ</h2>
                    </div>
                    {!! $page->misyonumuz !!}
                </div>
            </div>
        </div>
@endsection
