@extends('layouts.home')
@section("content")
<!-- Page Content -->
<div class="page-heading about-heading header-text" style="background-image: url({{asset('assets')}}/assets/images/heading-5-1920x500.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-content">
                    <h2>PROFİLİM</h2>
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
                    @include('profile.show')
            </div>
        </div>
    </div>
</div>
@endsection
