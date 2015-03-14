

<div class="ree">
<table class="table_base" style="width:500px">
        <tr>
            <td>Название компонента</td>
            <td>Тип</td> 
            <td>Вероятность</td> 
            <td>Действие</td> 
            
        </tr>
         <tr>
             
       
            
                
                  
                       
                        

    
        <td>
        <select name="variant_one">
            @foreach($todos as $todo) 
<option value="{{ $todo->title}}">{{ $todo->title}}</option>
   @endforeach
</select>
      
        
            </td>
                <td>  <select name="variant_two">
            @foreach($todos as $todo) 
<option value="{{ $todo->title}}">{{ $todo->title}}</option>
   @endforeach
         </select></td>
            <td>{{ Form::text('p', Input::old('p'), array('class' => 'form-control')) }}
            </td>

        

