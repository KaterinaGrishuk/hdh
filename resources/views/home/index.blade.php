@extends('layouts.main')

@section('content')

    <div class="slider_wrap">
        <ul class="bxslider1">
            <li><img src="img/slide33.jpg"></li>
            <li><img src="img/slide11.jpg"></li>
        </ul>
    </div>
    @include('home._pets')
    @include('home._help')
    @include('home._team')
    @include('home._news')
@endsection