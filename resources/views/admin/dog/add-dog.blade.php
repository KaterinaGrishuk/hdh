@extends('layouts.main')
@section('content')
    <section class="add_pet">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Добавить питомца</h3>
                </div>
                @if($errors->any())
                    <ul class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
                <div class="form_wrap">
                    {{ Form::open() }}
                    <span>Имя:</span>{{Form::text('name', null)}}<br>
                    <span>Пол:</span>{{Form::select('gender', array('1' => 'Мужской', '2' => 'Женский'))}}<br>
                    @if($errors->has('gender'))
                        <span class="alert alert-danger">{{ $errors->first('gender') }}</span>
                    @endif
                    <span>Возраст:</span>{{Form::text('age', null)}}<br>
                    @if($errors->has('age'))
                        <span class="alert alert-danger">{{ $errors->first('age') }}</span>
                    @endif
                    <span>Высота в холке, см:</span>{{Form::text('height', null)}}<br>
                    <span>Тип шерсти:</span>{{Form::select('wool', array('Короткая' => 'Короткая', 'Средней длины' => 'Средней длины', 'Длинная' => 'Длинная'))}}<br>
                    <span>Окрас:</span>{{Form::text('color', null)}}<br>
                    <span>Характер:</span>{{Form::text('character', null)}}<br>
                    <span>Вет-особенности:</span>{{Form::text('vet', null)}}<br>
                    <span>Дополнительная информация:</span>{{Form::textarea('information', null)}}<br>

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