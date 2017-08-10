@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align: center; background-color: #f1f1f1;">
                    {{--<div class="col-md-12">--}}
                        Вход
                    {{--</div>--}}
                </div>
                <div class="panel-body">
            <div class="login_form">
                <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                <div class="form-group{{ $errors->has('login') ? ' has-error' : '' }}">
                        <input id="login" type="text" class="form-control" name="login" placeholder="Логин" value="{{ old('login') }}" required autofocus>
                        @if ($errors->has('login'))
                            <span class="help-block">
                                <strong>{{ $errors->first('login') }}</strong>
                            </span>
                        @endif
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input id="password" type="password" class="form-control" name="password" placeholder="Пароль" required>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                </div>

                <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Запомнить меня
                            </label>
                        </div>
                </div>

                <div class="form-group">
                        <button type="submit" class="btn" style="font-size: 16px;">
                            Войти
                        </button>
                        <button type="button" class="btn" style="font-size: 16px;">
                            <a href="{{ route('register') }}">Регистрация</a>
                        </button>
                        <a class="btn btn-link" style="color: #5CA375; font-size: 16px;" href="{{ route('password.request') }}">
                            Восстановить пароль
                        </a>
                </div>
            </form>
        </div>
        </div>
        </div>
    </div>
    </div>

@endsection
@section('css')
    @parent

    <link rel="stylesheet" href="/css/login.css">
@endsection