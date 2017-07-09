@extends('layouts.main')
@section('content')

    <h2>Добавить питомца</h2>
    {{ Form::open() }}
        {{Form::text('name', null, ['placeholder' => 'Имя'])}}<br>
        {{Form::text('gender', null, ['placeholder' => 'Пол'])}}<br>
        {{Form::text('color', null, ['placeholder' => 'Окрас'])}}<br>
        {{Form::text('age', null, ['placeholder' => 'Возраст'])}}<br>
        {{Form::text('height', null, ['placeholder' => 'Высота в холке'])}}<br>
        {{Form::text('wool', null, ['placeholder' => 'Тип шерсти'])}}<br>
        {{Form::text('character', null, ['placeholder' => 'Характер'])}}<br>
        {{Form::text('vet', null, ['placeholder' => 'Вет-особенности'])}}<br>
        {{Form::textarea('information', null, ['placeholder' => 'Дополнительная информация'])}}<br>

        <button>Добавить</button><br>
    {{ Form::close() }}

@endsection