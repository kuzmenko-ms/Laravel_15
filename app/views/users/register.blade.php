@extends('template.template')


@section('content')


<div class="container">
    @if ($errors->all())
      
            @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
            @endforeach
       
    @endif
    
<div class="registration">
    
{{ Form::open(array('url' => 'users/register', 'role' => 'form', 'class' => 'form-horizontal')) }}
  <h2 class="form-signin-heading"> Регистрация</h2>
        {{ Form::label('email', 'E-Mail', array('class' => '')) }}
       
            {{ Form::email('email', null, array('class' => 'form-control')) }}
      
    
  
        {{ Form::label('username', 'Логин', array('class' => '')) }}
       
            {{ Form::text('username', null, array('class' => 'form-control')) }}
      
   
   
        {{ Form::label('password', 'Пароль', array('class' => '')) }}
       
            {{ Form::password('password', array('class' => 'form-control')) }}
       
 
  
        {{ Form::label('password_confirmation', 'Повтор пароля', array('class' => '')) }}
 
            {{ Form::password('password_confirmation', array('class' => 'form-control')) }}
            <BR><BR>
    


            <DIV style="width: 63%;text-align: center">
            <button style="text-align: center" type="submit" class="btn btn-primary">Зарегистрироваться</button>
            </div>

{{ Form::close() }}
</div>
</div>
@stop
