@extends('layouts.main')
@section('content')
    <section class="add_pet">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>КАК СТАТЬ ВОЛОНТЕРОМ И ПОМОЧЬ БЕЗДОМНЫМ ЖИВОТНЫМ? Просто!</h3>
                </div>
                <div class="col-md-7">
                    <div class="v_content">
                        <ul class="v_conditions">
                            <li><i class="fa fa-check" aria-hidden="true"></i>Вы любите собак и готовы уделять им несколько часов в неделю? Отлично!</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Заполните анкету или позвоните нам!</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Приезжайте на смену вместе с дружной командой волонтеров.</li>
                        </ul>
                        <h4>ЧТО МЫ ДЕЛАЕМ НА СМЕНЕ В ПРИЮТЕ?</h4>
                        <ul>
                            <li>Выгуливаем собак на поводках и "в свободном полете" на закрытой площадке;</li>
                            <li>Кормим животных;</li>
                            <li>Убираем вольеры и дом;</li>
                            <li>Лечим и оказываем уход после операции (если это необходимо);</li>
                            <li>Обнимаемся, гладимся, радуемся! =)</li>
                        </ul>
                        <h4>ВАЖНЫЕ МОМЕНТЫ!</h4>
                        <ul class="v_conditions">
                            <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>Жизненно необходимы ВОДИТЕЛИ С СОБСТВЕННЫМ ТРАНСПОРТОМ, так как "Дом Собачьей Надежды" находится за городом!</li>
                            <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>Мы рады новым волонтерам любого возраста, но несовершеннолетним обязательно поговорить с родителями! В будние дни мы возвращаемся в город поздно, а вот в выходные ездим днем.</li>
                            <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>Не можете ездить к нам постоянно? Это не беда! Вы можете помочь рекламой животных, едой и амуницией, свозить наших собак к врачу, рассказывать своим знакомым о нас и волонтерстве! Лучше маленькая помощь, чем большое сочувствие!</li>
                        </ul>
                        <h4>КОНТАКТЫ:</h4>
                        <p>Ольга +375(29)222-22-22,<br>Катя +375(29)333-33-33</p>
                        <h4>Звоните, пишите, приезжайте! Мы и наши собаки ждут вас!</h4>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form_wrap">
                        {{ Form::open() }}
                        <span>Имя*</span>{{Form::text('name', null)}}
                        <span>Возраст*</span>{{Form::text('age', null)}}
                        <span>Город</span>{{Form::text('city', null)}}
                        <span>Телефон*</span>{{Form::text('phone', null)}}
                        <span>E-mail*</span>{{Form::text('mail', null)}}
                        <span>Сфера деятельности (дежурства в приюте, помощь пиаром и пр.)*</span>{{Form::textarea('activities', null)}}
                        <span>Немного о себе</span>{{Form::textarea('about', null)}}

                        <button>Отправить</button><br>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('css')
    @parent
    <link rel="stylesheet" href="/css/become-volunteer.css">
@endsection