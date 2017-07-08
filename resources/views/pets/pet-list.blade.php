@extends('layouts.main')
@section('content')
    <section class="dogs">
        <div class="container clearfix">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <h3 style="background-image:none;">Найди своего любимца</h3>
                    </div>
                    <div class="col-md-3">
                        <div class="dog_wrap">
                            <a href="#"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                            <div class="dog_img"><img src="../img/1shami.jpg" alt=""></div>
                            <div class="dog_data">
                                <div class="dog_name">Шами</div>
                                <div class="dog_age">4 года</div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="dog_wrap">
                            <a href="#"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                            <div class="dog_img"><img src="../img/2forest.jpg" alt=""></div>
                            <div class="dog_data">
                                <div class="dog_name">Форест</div>
                                <div class="dog_age">5 лет</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="dog_wrap">
                            <a href="{{ route('barhat') }}"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                            <div class="dog_img"><img src="../img/3barhat.jpg" alt=""></div>
                            <div class="dog_data">
                                <div class="dog_name">Бархат</div>
                                <div class="dog_age">3 года</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="dog_wrap">
                            <a href="#"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                            <div class="dog_img"><img src="../img/4polkan.jpg" alt=""></div>
                            <div class="dog_data">
                                <div class="dog_name">Полкан</div>
                                <div class="dog_age">4 года</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="dog_wrap">
                            <a href="#"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                            <div class="dog_img"><img src="../img/5myha.jpg" alt=""></div>
                            <div class="dog_data">
                                <div class="dog_name">Муха</div>
                                <div class="dog_age">3 года</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="dog_wrap">
                            <a href="#"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                            <div class="dog_img"><img src="../img/6pona.jpg" alt=""></div>
                            <div class="dog_data">
                                <div class="dog_name">Пона</div>
                                <div class="dog_age">4 года</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="dog_wrap">
                            <a href="#"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                            <div class="dog_img"><img src="../img/7liza.jpg" alt=""></div>
                            <div class="dog_data">
                                <div class="dog_name">Лиза</div>
                                <div class="dog_age">3 года</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="dog_wrap">
                            <a href="#"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                            <div class="dog_img"><img src="../img/8sony.jpg" alt=""></div>
                            <div class="dog_data">
                                <div class="dog_name">Соня</div>
                                <div class="dog_age">4 года</div>
                            </div>
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