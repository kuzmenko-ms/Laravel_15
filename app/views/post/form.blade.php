

<div class="ree">
<table class="table_base">
        <tr>
            <td>Название проекта</td>
            <td>Описание</td> 
            <td>Действие</td> 
            
        </tr>
         <tr>
            <td>{{ Form::text('title', Input::old('title'), array('class' => 'form-control')) }}</td>
            <td>{{ Form::textarea('description', Input::old('body'), array('rows' => '1', 'class' => 'form-control')) }}
            </td>


  
        
