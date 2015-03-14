

<div class="ree">
<table class="table_base" style="width:500px">
        <tr>
            <td>Название типа</td>
            <td>Тип</td>
            <td>Действие</td>
        </tr>
         <tr>
            <td>{{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}</td>
             <td>
             
         <select name="type_id">
            @foreach($types as $type) 
<option value="{{ $type->id}}">{{ $type->id}}</option>
   @endforeach
         </select>
             </td>
         

            

  
        
