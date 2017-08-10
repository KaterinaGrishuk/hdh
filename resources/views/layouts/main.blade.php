<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Приют "Дом собачьей надежды"')</title>
    @section('css')
        <link rel="stylesheet" type="text/css" href="/css/app.css">
        <link rel="stylesheet" type="text/css" href="/css/main.css">
        <link rel="stylesheet" type="text/css" href="/libs/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="/libs/fancybox/source/jquery.fancybox.css" media="screen" />
        <link rel="shortcut icon" href="/img/logo-i2.png" type="image/png">
    @show
</head>
<body style="color: #222222;">
<header>
    <div class="top_header">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="main-logo">
                        <div class="top_logo">
                            <a href="{{ route('home') }}"><img src="/img/logo.png" alt="Дом собачьей надежды"></a>
                        </div>
                        <div class="site-name">
                            <h1>Дом собачьей надежды</h1>
                            <h2>Частный мини-приют для бездомных собак</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="entrance">
                        @if(Auth::guest())
                            <a href="{{route('login')}}"><i class="fa fa-user-o" aria-hidden="true"></i>Вход / Регистрация</a>
                        @else
                            <div class="auth_user">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <i class="fa fa-user-o" aria-hidden="true"></i>{{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu" role="menu">
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();"> Выйти
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                            </div>

                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrap_main_menu clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="main_menu">
                        <ul>
                            <li style="margin-left: 10px;"><a href="{{ route('home') }}">Главная</a></li>
                            <li><a href="{{ route('pet-list') }}">Питомцы</a></li>
                            <li><a href="{{ route('help') }}">Помощь приюту</a></li>
                            <li><a href="{{ route('reports') }}">Финансовые отчёты</a></li>
                            <li><a href="{{ route('about') }}">О нас</a></li>
                            <li><a href="{{route('volunteer')}}">Стать волонтёром</a></li>
                            @if(Auth::user())
                            <li><a style="color: #843534;" href="{{route('timetable')}}">График</a></li>
                            @endif
                            <li style="margin-right: 10px;"><a href="{{route('contacts')}}">Контакты</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="fix_menu">
    <ul>
        <li><a href="{{ route('home') }}">Главная</a></li>
        <li><a href="{{ route('pet-list') }}">Питомцы</a></li>
        <li><a href="{{ route('help') }}">Помощь приюту</a></li>
        <li><a href="{{ route('reports') }}">Финансовые отчёты</a></li>
        <li><a href="{{ route('about') }}">О нас</a></li>
        <li><a href="{{route('volunteer')}}">Стать волонтёром</a></li>
        <li><a href="{{route('contacts')}}">Контакты</a></li>
    </ul>
    <div class="entrance">
        @if(Auth::guest())
            <a href=""><i class="fa fa-user-o" aria-hidden="true"></i>Вход</a>
        @else
            {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">--}}
                <i class="fa fa-user-o" aria-hidden="true"></i>{{ Auth::user()->name }}</span>
            {{--</a>--}}
        @endif
    </div>
</div>
@yield('content')


<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h4>Дом Собачьей Надежды</h4>
            </div>
            <div class="col-md-4">
                <div class="contacts_wrap">
                    <div class="tel">
                        <i class="fa fa-phone" aria-hidden="true"></i> +375 29 3752589
                    </div>
                    <div class="mail">
                        <i class="fa fa-envelope-open-o" aria-hidden="true"></i> ddog@gmail.com
                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <div class="social">
                    Мы в социальных сетях:
                    <div class="s_link">
                        <a href="#"><i class="fa fa-vk" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-odnoklassniki" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <ul>
                    <li><a href="{{ route('home') }}">Главная</a></li>
                    <li><a href="{{ route('pet-list') }}">Питомцы</a></li>
                    <li><a href="{{ route('help') }}">Помощь приюту</a></li>
                    <li><a href="{{ route('reports') }}">Финансовые отчёты</a></li>
                    <li><a href="{{ route('about') }}">О нас</a></li>
                    <li><a href="{{route('volunteer')}}">Стать волонтёром</a></li>
                    <li><a href="{{route('contacts')}}">Контакты</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
    @section('footer.js')
        <script src='/js/app.js'></script>
        <script src="/libs/jquery.bxslider/jquery.bxslider.min.js"></script>
        <script src="/libs/fancybox/lib/jquery.mousewheel.pack.js"></script>
        <script src="/libs/fancybox/source/jquery.fancybox.pack.js"></script>
        <script src="/js/jquery.maskedinput.js"></script>
        <script src="/js/common.js"></script>
    @show
</body>
</html>