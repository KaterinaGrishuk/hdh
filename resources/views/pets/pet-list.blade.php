@extends('layouts.main')
@section('content')
    <section class="dogs">
        <div class="container clearfix">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <h3 style="background-image:none;">Найди своего любимца</h3>
                    </div>
                    @foreach($dogs as $dog)
                        <div class="col-md-3">
                            <div class="dog_wrap">
                                <a href="{{ route('pet', ['pet' => $dog->slug]) }}"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                @if(!$dog->images->isEmpty())
                                    <div class="dog_img"><img src="{{$dog->images->first()->path}}" alt=""></div>
                                @endif
                                <div class="dog_data">
                                    <div class="dog_name">{{ $dog->name }}</div>
                                    <div class="dog_age">{{ $dog->age }} {{$controller->makeYears($dog->age)}} </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="row">
                        <div class="col-md-12">
                        {{ $dogs->render() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('css')
    @parent
    <link rel="stylesheet" href="/css/pets.css">
@endsection