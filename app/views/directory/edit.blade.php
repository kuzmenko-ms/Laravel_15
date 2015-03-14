@extends('template.template')




@section('content')
<div class="container">
    <div class="post_cont">
         <a href="/">На главную</a>
    {{ Form::model($types, array('action' => ['DirController@update', $types->id], 'class' => '', 'method' => 'post_update' )) }}

        @include('directory.form')

       
        <td>     {{ Form::submit('Изменить', array('class' => 'btn ','onclick'=>'return confirm("Изменить?")')) }}
        
        </td>
    {{ Form::close() }}
    
        
            
        </tr>
    </table>
    
</div>
    </div>
</div>
@stop