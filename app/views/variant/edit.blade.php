@extends('template.template')




@section('content')
<div class="container">
    <div class="post_cont">
         <a href="/">На главную</a>
    {{ Form::model($variant, array('action' => ['VariantController@update', $variant->id], 'class' => '', 'method' => 'variant_update' )) }}

        @include('variant.form')

       
        <td>     {{ Form::submit('Изменить', array('class' => 'btn ','onclick'=>'return confirm("Изменить?")')) }}
        
        </td>
    {{ Form::close() }}
    
        
            
        </tr>
    </table>
    
</div>
    </div>
</div>
@stop