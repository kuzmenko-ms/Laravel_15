@extends('template.template')

@section('content')
<div class="container">
    <div class="err">
<h2>Ошибка заполнения формы</h2>
    @if (isset($errors))
        @foreach($errors as $error)
            <strong> {{ $error[0] }} </strong><br/>
        @endforeach
    @else
    <h2>good</h2>
    @endif
    <a href="{{URL::previous()}}">Назад</a>
    </div>
</div>
@stop