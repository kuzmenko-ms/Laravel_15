@extends('template.template')




@section('content')
<div class="container">
    <div class="post_cont">
         <a href="/">На главную</a>
    {{ Form::model($component, array('action' => ['ComponentController@update', $component->id], 'class' => '', 'method' => 'post_update' )) }}

        @include('directory.form_comp')

       
        <td>     {{ Form::submit('Изменить', array('class' => 'btn ','onclick'=>'return confirm("Изменить?")')) }}
        
        </td>
    {{ Form::close() }}
    
        
            
        </tr>
    </table>
    
</div>
    </div>
</div>
@stop