@extends('layouts.main')
@section('content')
    <section class="adminPage">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Панель администратора</h3>
                </div>
                <div class="col-md-12">
                    <div class="addDogBtn">
                    <a href="{{route('addDog')}}"><button type="button" class="add btn btn-success">Добавить питомца   <i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                    </div>
                </div>
                @if(session('status'))
                    <div class="col-md-12">
                        <div class="alert alert-success">{{ session('status') }}</div>
                    </div>
                @endif
                <table class="dogstable table table-bordered table-hover table-condensed">
                    <thead style="text-align: center; background-color: #d4d4d4;">
                        <tr>
                            <td>№ п/п</td>
                            <td>Имя</td>
                            <td>Ссылка на страницу</td>
                            <td>Редактировать</td>
                            <td>Удалить</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dogs as $dog)
                            <tr>
                                <td>{{$dog->id}}</td>
                                <td>{{$dog->name}}</td>
                                <td>{!! Html::link(route('pet',['pet'=>$dog->slug]),route('pet',['pet'=>$dog->slug]))!!}</td>
                                <td>
                                    <a href="{{route('editDog',['id'=>$dog->id])}}"><button type="button" class="edit btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></button></a>
                                </td>
                                <td>
                                    {{ Form::open() }}
                                        {{ method_field('DELETE') }}
                                        {{Form::hidden('id', $dog->id)}}
                                        <button type="submit" class="delete btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    {{ Form::close() }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>


@endsection
@section('css')
    @parent
    <link rel="stylesheet" href="/css/admin-page.css">
@endsection