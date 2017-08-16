@extends('layouts.main')
@section('content')
    <section class="add_pet">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Изменить запись о питомце</h3>
                </div>
                <div class="form_wrap">
                    {{ Form::open(['method'=>'post', 'files' => true]) }}
                    <span>Имя:</span>{{Form::text('name', $oldData['name'])}}<br>
                    @if($errors->has('name'))
                        <span class="alert alert-danger">{{ $errors->first('name') }}</span><br>
                    @endif
                    <span>Пол:</span>{{Form::select('gender', ['1' => 'Мужской', '2' => 'Женский'], $oldData['gender'])}}<br>
                    @if($errors->has('gender'))
                        <span class="alert alert-danger">{{ $errors->first('gender') }}</span><br>
                    @endif
                    <span>Возраст, лет:</span>{{Form::text('age', $oldData['age'])}}<br>
                    @if($errors->has('age'))
                        <span class="alert alert-danger">{{ $errors->first('age') }}</span><br>
                    @endif
                    <span>Высота в холке, см:</span>{{Form::text('height', $oldData['height'])}}<br>
                    @if($errors->has('height'))
                        <span class="alert alert-danger">{{ $errors->first('height') }}</span><br>
                    @endif
                    <span>Тип шерсти:</span>{{Form::select('wool', array('Короткая' => 'Короткая', 'Средней длины' => 'Средней длины', 'Длинная' => 'Длинная'), $oldData['wool'])}}<br>
                    @if($errors->has('wool'))
                        <span class="alert alert-danger">{{ $errors->first('wool') }}</span><br>
                    @endif
                    <span>Окрас:</span>{{Form::text('color', $oldData['color'])}}<br>
                    @if($errors->has('color'))
                        <span class="alert alert-danger">{{ $errors->first('color') }}</span><br>
                    @endif
                    <span>Характер:</span>{{Form::text('character', $oldData['character'])}}<br>
                    @if($errors->has('character'))
                        <span class="alert alert-danger">{{ $errors->first('character') }}</span><br>
                    @endif
                    <span>Вет-особенности:</span>{{Form::text('vet', $oldData['vet'])}}<br>
                    @if($errors->has('vet'))
                        <span class="alert alert-danger">{{ $errors->first('vet') }}</span><br>
                    @endif
                    <span>Дополнительная информация:</span>{{Form::textarea('information', $oldData['information'])}}<br>
                    @if($errors->has('information'))
                        <span class="alert alert-danger">{{ $errors->first('information') }}</span><br>
                    @endif

                    <span class="s_foto" style="width: 100%;">Фото</span>
                    <div class="foto_wrap">
                        <ul>
                            @foreach($dog->images as $photo)
                                {{--{{Form::hidden('old_img', $photo->path)}}--}}
                                <li>
                                    <a class="foto" rel="group" href="{{$photo->path}}">{{Html::image($photo->path)}}</a>
                                    {{--<a class="foto" rel="group" href="{{$photo->path}}"><img src="{{$photo->path}}" alt=""></a>--}}
                                {{--{{Form::open()}}--}}
                                {{--{{method_field('DELETE')}}--}}
                                {{--{{Form::hidden('id',$photo->id)}}--}}
                                {{--<button type="submit" class="btn">Удалить</button>--}}
                                {{--{{ Form::close() }}--}}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <span>Добавить фото</span>{{Form::file('dog_img[]', ['multiple' => true])}}<br>
                    <button type="submit">Сохранить</button><br>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </section>

@endsection
@section('css')
    @parent
    <link rel="stylesheet" href="/css/add-dog.css">
    <link rel="stylesheet" href="/css/barhat.css">
@endsection