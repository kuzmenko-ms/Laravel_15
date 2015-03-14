@extends('template.template')

@section('title')
Сброс пароля
@stop

@section('content')
    <div class="container">
        @if (Session::has('error'))
            <div class="alert alert-danger">
                {{ Session::get('error') }}
            </div>
        @endif

        <h2>Сброс пароля</h2>

        {{ Form::open(array('url' => action('RemindersController@postReset'), 'method' => 'post', 'role' => 'form', 'class' => 'form-horizontal')) }}
            <div class="form-group">
                <label for="email" class="">Ваш E-Mail</label>
                <div class="">
                    {{ Form::email('email', null, array('class' => 'form-control')) }}
                </div>
            </div>

            <div class="form-group">
                <label for="password" class="">Новый пароль</label>
                <div class="">
                    {{ Form::password('password', array('class' => 'form-control')) }}
                </div>
            </div>

            <div class="form-group">
                <label for="password_confirmation" class="">Повторите</label>
                <div class="">
                    {{ Form::password('password_confirmation', array('class' => 'form-control')) }}
                </div>
            </div>

            <input type="hidden" name="token" value="{{ $token }}" />

            <div class="form-group">
                <div class="">&nbsp;</div>
                <div class="">
                    <button type="submit" class="btn btn-primary">Сбросить</button>
                </div>
            </div>
        {{ Form::close() }}
    </div>
@stop
