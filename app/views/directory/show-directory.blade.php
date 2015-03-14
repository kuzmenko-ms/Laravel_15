@extends('template.template')

@section('content')




    @if(isset($types)&&count($types))
   
    <div class="container">
        <div><h3>Выбор Варианта:</h3></div>
           <select  id="id_variant"   name="id_variant">
               
                @foreach($variant as $var)
                    <option value="{{$var->id}}">{{$var->id}}</option>
                @endforeach
         </select>
        <div>
            <br>
            Взаимная энтропия: <h3><div class="levyi"></div></h3>
        </div>
        <br>
        <br>
             <p>    
        Вариант 2 (Состоит из компонентов):
         @foreach($test as $t)
         <b>({{$t->id_component}}) </b>
        @endforeach
        
    </p>
    
    <p>    
        Вариант 3 (Состоит из компонентов):
         @foreach($test1 as $t)
          <b>({{$t->id_component}}) </b>
        @endforeach
    </p>
    
    <p>    
        Вариант 4 (Состоит из компонентов):
         @foreach($test2 as $t)
         <b> ({{$t->id_component}}) </b>
        @endforeach
    </p>
    

      @if (Auth::check())
      <hr>
      <h3>Создание типа</h3>
        
        <table class="table_base" >
            <tr>
                <td>Название типа</td>
                @if (Auth::check())
                <td>Действия</td> @endif 
            </tr>
    
        @foreach($types as $type)
      
       
             <tr>
                <td>   <p class="title">{{ $type->name}}</p></td>
                
            
                <td>
                    
                      <a class="btn" href="{{ route('dir.destroy', $type->id) }}"onclick="return confirm('Вы точно хотите удалить?')"  data-method="delete">Удалить</a>
                <a class="btn" href="/dir/{{$type->id}}/edit">Изменить</a>
                </td>
             
            </tr>
                    @endforeach
        </table>
        
 
        
 <div class="form_post">
{{ Form::open()}}
{{Form::text('name',null,[ 'required'=>'required','placeholder'=>'Название Типа','autocomplete'=>'off'])}}<br>
{{Form::submit('Создать')}}<br>
{{Form::close()}}
</div>
       <br><br> 
       
        <hr>
      <h3>Создание компонента</h3>
    <table class="table_base">
        
            <tr>
                <td>Название Компонента</td>
                  <td>Тип</td>
                
                <td>Действия</td> 
            </tr>
           
       @foreach($component as $components)
        <tr>
       <td>{{ $components->name}}</td>
       <td>{{ $components->type_id}}</td>
        <td>
                    
                      <a class="btn" href="{{ route('dir2.destroy', $components->id) }}"onclick="return confirm('Вы точно хотите удалить компонент?')"  data-method="delete">Удалить</a>
                <a class="btn" href="/comp/{{$components->id}}/edit">Изменить</a>
                </td>
       </tr>
        @endforeach        
        
    </table>
         <div class="form_post">
{{Form::open()}}
{{Form::text('name_comp',null,[ 'required'=>'required','placeholder'=>'Название Компонента','autocomplete'=>'off'])}}<br>
     <select name="type_id">
            @foreach($types as $type) 
<option value="{{ $type->id}}">{{ $type->id}}</option>
   @endforeach
         </select>

{{Form::submit('Создать')}}<br>
{{Form::close()}}
</div>
   
<br><br>
<hr>
      <h3>Условные вероятности</h3>
       <table class="table_base">
       
            <tr>
                <td>Компонент 1</td>
                  <td>Компонент 2</td>
                  <td>Вероятность</td>
                
                <td>Действия</td> 
            </tr>
            
            
               @foreach($condprob as $cond)
        <tr>
       <td>{{ $cond->comp_one_id}}</td>
       <td>{{ $cond->comp_two_id}}</td>
       <td>{{ $cond->P}}</td>
       <td>
                      <a class="btn" href="{{ route('dir3.destroy', $cond->id) }}"onclick="return confirm('Вы точно хотите удалить?')"  data-method="delete">Удалить</a>
                </td>
       </tr>
        @endforeach  
            
       </table>
      
               <div class="form_post">
{{Form::open()}}
     <select name="comp_one_id">
             @foreach($component as $components)
<option value="{{$components->id}}">{{$components->id}}</option>
   @endforeach
         </select>

     <select name="comp_two_id">
             @foreach($component as $components)
<option value="{{$components->id}}">{{$components->id}}</option>
   @endforeach
         </select>

{{Form::text('P',null,[ 'required'=>'required','placeholder'=>'Вероятность','autocomplete'=>'off'])}}<br>

{{Form::submit('Создать')}}<br>
{{Form::close()}}
</div>
      

      
   <br>
      <br>
  <hr>
      <h3>Принадлежность компонента варианту</h3>    
 <table class="table_base">
            <tr>
                  <td>Компонент</td>
                  <td>Вариант</td>
                
                <td>Действия</td> 
            </tr>      


  @foreach($compvariant as $comp)
        <tr>
       <td>{{ $comp->id_component}}</td>
       <td>{{ $comp->id_variant}}</td>
       <td>
                      <a class="btn" href="{{ route('dir4.destroy', $comp->id) }}"onclick="return confirm('Вы точно хотите удалить?')"  data-method="delete">Удалить</a>
                </td>
       </tr>
        @endforeach  
        

 </table> 
      <br><br>
      
                <div class="form_post">
{{Form::open()}}
   <select name="id_component">
             @foreach($component as $components)
<option value="{{$components->id}}">{{$components->id}}</option>
   @endforeach
         </select>

     <select name="id_variant">
             @foreach($variant as $var)
<option value="{{$var->id}}">{{$var->id}}</option>
   @endforeach
         </select>



{{Form::submit('Создать')}}<br>
{{Form::close()}}
</div>
          
      
      
      
      
      
      <br>
      <br>
        <hr>
      <h3>Варианты</h3>  
       <table class="table_base" >
            <tr>
                  <td>Вариант</td>
                  <td>Взаимная Энтропия варианта</td>
                
                <td>Действия</td> 
            </tr>   
            
             @foreach($variant as $var)
        <tr>
                
       <td>{{ $var->id}}</td>
       <td>{{ $var->matual_entropy}}</td>
       <td>
                      <a class="btn" href="{{ route('dir5.destroy', $var->id) }}"onclick="return confirm('Вы точно хотите удалить?')"  data-method="delete">Удалить</a>
                </td>
       </tr>
        @endforeach  
 </table>
          </div>
      @endif
    
    @else
    <div style="text-align: center" class="container">
    <p >К сожалению список компонентов пуст:(</p>
    <p></p>
      
    

     
     
     
     @endif
         </div>
@stop