@extends('layouts.main')
@section('content')
    <section class="dogs">
        <div class="container clearfix">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <h3 style="background-image:none;">Найди своего любимца</h3>
                    </div>
                    <div class="col-md-12">
                        <div class="filter_wrap">
                            <div class="filter-but-w"><button id="js-filter-but">Фильтр</button></div>
                            <div class="drop-filter clearfix">
                                {{Form::open(['method' => 'get'])}}
                                <span>Пол: </span> {{Form::select('gender', [0 => '--Выберите--', 1 => "Мужской", 2 => "Женский"], null, ['id' => 'js-gender-filter', 'class'=>"form-control"])}}
                                <span>Возраст, лет: </span>{{Form::select('age', [0 => '--Выберите--', 1=>'0-4', 2=>'5-9', 3=>'10-14'], null, ['id'=>'js-age-filter', 'class'=>"form-control"])}}
                                {{Form::close()}}
                                {{Form::open(['method' => 'get'])}}
                                <span id="js-clear-filter">Очистить</span>
                                {{Form::hidden('gender', 0)}}
                                {{Form::hidden('age', 0)}}
                                {{Form::close()}}
                            </div>

                        </div>
                    </div>
                    @foreach($dogs as $dog)
                        <div class="col-md-3">
                            <div class="dog_wrap">
                                <a href="{{ route('pet', ['pet' => $dog->slug]) }}"><i class="fa fa-search-plus"
                                                                                       aria-hidden="true"></i></a>
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
                            
                            {{ $dogs->appends(Request::only(['gender', 'age']))->render() }}
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
@section('footer.js')
    @parent
    <script>
        $('#js-gender-filter').on('change', function (e) {
            var val = $(this).val();
//            if (0 == val) {
//                return;
//            }
            $(this).parent().submit();
        });
        $('#js-age-filter').on('change', function (e) {
            var value = $(this).val();
            $(this).parent().submit();
        });
        $('#js-clear-filter').on('click', function (e) {
            $('#js-age-filter').val(0);
            $(this).parent().submit();
        });
        $('#js-filter-but').on('click', function (e) {
            var filterBlock = $('.drop-filter');
            filterBlock.toggleClass('show');
            localStorage.setItem('filter', filterBlock.is(':visible') ? 1 : 0);
        });
        
        if(localStorage.getItem('filter') == 1){
            $('.drop-filter').toggleClass('show');
        }
    </script>
@endsection