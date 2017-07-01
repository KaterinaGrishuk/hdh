@extends('layouts.main')
@section('content')
    <section class="description">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Бархат ждёт своего хозяина</h3>
                </div>
                <div class="col-md-3">
                    <div class="img_border"><img src="../img/3barhat.jpg" alt="Бархат"></div>
                    <div class="share">
                        <p>Поделиться</p>
                        <div class="s_social">
                            <a href="#"><i class="fa fa-vk" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-odnoklassniki" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="information">
                        <div class="d_name"><span>Кличка:</span>Бархат</div>
                        <div class="d_gender"><span>Пол:</span>Мужской</div>
                        <div class="d_days"><span>Дни ожидания:</span>1243 дня</div>
                        <div class="d_color"><span>Окрас:</span>Зонарно рыжий</div>
                        <div class="d_age"><span>Возраст:</span>4 года</div>
                        <div class="d_height"><span>Высота в холке:</span>48 см</div>
                        <div class="d_wool"><span>Тип Шерсти:</span>Средней длины</div>
                        <div class="d_age"><span>Характер:</span>Активный, добрый, любопытный</div>
                        <div class="d_vet"><span>Вет-особенности:</span>Здоров, привит, обработан от паразитов, стерилизован</div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="album">
                        <h4>Альбом</h4>
                        <div class="foto_wrap">
                            <div class="foto"><img src="" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('css')
    @parent
    <link rel="stylesheet" href="/css/barhat.css">
@endsection