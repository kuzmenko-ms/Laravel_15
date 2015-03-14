@extends('template.template')




@section('content')
<div class="container">
    <div class="post_cont">
         <a href="/">На главную</a>
    {{ Form::model($post, array('action' => ['PostController@update', $post->id], 'class' => '', 'method' => 'post_update' )) }}

        @include('post.form')

       
        <td>     {{ Form::submit('Изменить', array('class' => 'btn ','onclick'=>'return confirm("Изменить?")')) }}
        
        </td>
    {{ Form::close() }}
    
        
            
        </tr>
    </table>
    
</div>
    </div>
</div>
@stop