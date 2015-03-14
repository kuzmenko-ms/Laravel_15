@extends('template.template')

@if (Auth::check())


@section('content')



    @if(isset($posts)&&count($posts))
    
    
    
        <table>
            <tr>
                <td>Название проекта</td>
                <td>Автор</td>
                <td>Действия</td>
            </tr>
    
        @foreach($posts as $post)
         <img src="{{ $post->preview }}" style="float:left">
       
             <tr>
                <td>   <a href="post/{{$post->id}}"><p class="title">{{ $post->title}}</p></a></td>
                <td class='box'>{{ $post->description}}</td>
                <td>{{ $post->author}}</td>
                <td><a class="btn" href="/post/{{$post->id}}/edit">Изменить</a>|<a class="btn" href="{{ route('post.destroy', $post->id) }}"onclick="return confirm('Вы точно хотите удалить проект?')"  data-method="delete">Удалить</a></td>
            </tr>
                    @endforeach
        </table>
        
   
    <br><br><br>
    <h1>Создание проекта</h1>
         <div class="form_post">
{{Form::open()}}

{{Form::text('title',null,[ 'required'=>'required','placeholder'=>'Название проекта','autocomplete'=>'off'])}}<br>
{{Form::textarea('description',null,['required'=>'required', 'placeholder'=>'Описание проекта','autocomplete'=>'off','width'=>'174'])}}<br>
{{Form::submit('Создать новый проект')}}<br>
{{Form::close()}}
</div>
    <hr>
    
    @else
    <div style="text-align: center" class="container">
    <p >К сожалению список проектов пуст:(</p>
    <div class="form_post">
<h1>Создание проекта</h1>
        {{Form::open()}}

{{Form::text('title',null,[ 'required'=>'required','placeholder'=>'Название проекта','autocomplete'=>'off'])}}<br>
{{Form::textarea('description',null,['required'=>'required', 'placeholder'=>'Описание проекта','autocomplete'=>'off','width'=>'174'])}}<br>
<br>
{{Form::submit('Создать новый проект')}}<br>
{{Form::close()}}
</div>
     @endif
    

  
</div>
    
      @endif
@stop