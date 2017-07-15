@extends('layouts.main')
@section('content')
    <section class="feedback">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Обратная связь</h3>
                </div>
                <div class="col-md-7">
                    <div class="form_wrap">
                        {{ Form::open() }}
                        <span>Тема*</span>{{Form::select('theme', array('1' => 'Вопросы по оказанию финансовой помощи', '2' => 'Могу помочь временной передержкой', '3' => 'Могу подвезти', '4' => 'Есть возможность помочь с фотографиями', '5' => 'Могу помочь с рекламой', '6' => 'Могу принять участие в мероприятиях', '7' => 'Вопросы по работе сайта', '8' => 'Другие вопросы'))}}
                        <span>Имя*</span>{{Form::text('name', null)}}
                        <span>Как нам с вами связаться*</span>{{Form::text('contacts', null)}}
                        <span>Сообщение*</span>{{Form::textarea('about', null)}}

                        <button>Отправить</button><br>
                        {{ Form::close() }}
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="img_feedback">
                        <img src="/img/feedback.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('css')
    @parent
    <link rel="stylesheet" href="/css/feedback.css">
@endsection