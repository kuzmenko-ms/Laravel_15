@extends('template.template')
 


@section('content')
<div class="container">
    @if (Session::has('alert'))
        <div class="alert alert-danger">
            <p>{{ Session::get('alert') }}
        </div>
    @endif

    <form class="form-signin" role="form" action="{{ action('UsersController@postLogin') }}" method="post">
        <h2 class="form-signin-heading">Ваши данные</h2>
         {{ Form::label('username', 'Логин', array('class' => '')) }}
        <input type="text" class="form-control" placeholder="Email или имя" name="username" required autofocus />
        {{ Form::label('password', 'Пароль', array('class' => 're')) }}
        <input type="password" class="form-control" placeholder="Password" name="password" required />
        <BR>
        <label class="checkbox"><BR>
            <input type="checkbox" name="remember" value="remember-me"> Запомнить меня
        </label>
        <DIV style="width: 63%;text-align: center">
        <button class="btn btn-primary" type="submit">Войти</button>
        <BR>
        <a href="/password/remind">Забыли пароль?</a> |
        <a href="/users/register">Регистрация</a>
        </div>
    </form>
</div>
@stop
