@extends('layouts.main')
@section('content')
    <section class="add_pet">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Добавить питомца</h3>
                </div>
                {{--@if($errors->any())--}}
                    {{--<ul class="alert alert-danger">--}}
                        {{--@foreach($errors->all() as $error)--}}
                            {{--<li>{{ $error }}</li>--}}
                        {{--@endforeach--}}
                    {{--</ul>--}}
                {{--@endif--}}
                <div class="form_wrap">
                    {{ Form::open(['files' => true]) }}
                    <span>Имя:</span>{{Form::text('name', null)}}<br>
                    @if($errors->has('name'))
                        <span class="alert alert-danger">{{ $errors->first('name') }}</span><br>
                    @endif
                    <span>Пол:</span>{{Form::select('gender', array('1' => 'Мужской', '2' => 'Женский'))}}<br>
                    @if($errors->has('gender'))
                        <span class="alert alert-danger">{{ $errors->first('gender') }}</span><br>
                    @endif
                    <span>Возраст, лет:</span>{{Form::text('age', null)}}<br>
                    @if($errors->has('age'))
                        <span class="alert alert-danger">{{ $errors->first('age') }}</span><br>
                    @endif
                    <span>Высота в холке, см:</span>{{Form::text('height', null)}}<br>
                    @if($errors->has('height'))
                        <span class="alert alert-danger">{{ $errors->first('height') }}</span><br>
                    @endif
                    <span>Тип шерсти:</span>{{Form::select('wool', array('Короткая' => 'Короткая', 'Средней длины' => 'Средней длины', 'Длинная' => 'Длинная'))}}<br>
                    @if($errors->has('wool'))
                        <span class="alert alert-danger">{{ $errors->first('wool') }}</span><br>
                    @endif
                    <span>Окрас:</span>{{Form::text('color', null)}}<br>
                    @if($errors->has('color'))
                        <span class="alert alert-danger">{{ $errors->first('color') }}</span><br>
                    @endif
                    <span>Характер:</span>{{Form::text('character', null)}}<br>
                    @if($errors->has('character'))
                        <span class="alert alert-danger">{{ $errors->first('character') }}</span><br>
                    @endif
                    <span>Вет-особенности:</span>{{Form::text('vet', null)}}<br>
                    @if($errors->has('vet'))
                        <span class="alert alert-danger">{{ $errors->first('vet') }}</span><br>
                    @endif
                    <span>Дополнительная информация:</span>{{Form::textarea('information', null)}}<br>
                    @if($errors->has('information'))
                        <span class="alert alert-danger">{{ $errors->first('information') }}</span><br>
                    @endif
                    <span>Добавить фото</span>{{Form::file('dog_img[]', ['multiple' => true])}}<br>
                    <button>Добавить</button><br>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </section>

@endsection
@section('css')
    @parent
    <link rel="stylesheet" href="/css/add-dog.css">
@endsection