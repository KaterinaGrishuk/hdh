<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Приют "Дом собачьей надежды"')</title>
    @section('css')
        <link rel="stylesheet" type="text/css" href="/css/app.css">
        <link rel="stylesheet" type="text/css" href="/css/main.css">
        <link rel="stylesheet" type="text/css" href="/libs/font-awesome/css/font-awesome.min.css">
    @show
</head>
<body>
<header>
    <div class="top_header">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="main-logo">
                        <div class="top_logo">
                            <a href="#"><img src="img/logo.png" alt="Дом собачьей надежды"></a>
                        </div>
                        <div class="site-name">
                            <h1>Дом собачьей надежды</h1>
                            <h2>Частный мини-приют для бездомных собак</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="entrance">
                        <a href=""><i class="fa fa-user-o" aria-hidden="true"></i>Вход / Регистрация</a>
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
                            <li><a href="#">Главная</a></li>
                            <li><a href="{{ route('pet-list') }}">Питомцы</a></li>
                            <li><a href="#">Помощь приюту</a></li>
                            <li><a href="#">Финансовые отчёты</a></li>
                            <li><a href="#">О нас</a></li>
                            <li><a href="#">Стать волонтёром</a></li>
                            <li><a href="#">Контакты</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

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
                    <li><a href="#">Главная</a></li>
                    <li><a href="#">Питомцы</a></li>
                    <li><a href="#">Помощь приюту</a></li>
                    <li><a href="#">Финансовые отчёты</a></li>
                    <li><a href="#">О нас</a></li>
                    <li><a href="#">Стать волонтёром</a></li>
                    <li><a href="#">Контакты</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
    @section('footer.js')
        <script src='/js/app.js'></script>
        <script src="/libs/jquery.bxslider/jquery.bxslider.min.js"></script>
        <script src="/js/common.js"></script>
    @show
</body>
</html>