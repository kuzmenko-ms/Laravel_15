@extends('template.template')

@section('content')

    <div class="container">
    <a href="/">На главную</a>
    <table class="table_base">
        <tr>
            <td>Название проекта</td>
            <td>Описание проекта</td>
            
        </tr>
           <tr>
            <td>{{$post->title }}</td>
            <td>{{ $post->description }}</td>
            
        </tr>
        
        
    </table>
    
    
    </div> 
   

@stop