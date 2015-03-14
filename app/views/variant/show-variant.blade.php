@extends('template.template')

@section('content')

    @if(isset($variant)&&count($variant))
    
    <div class="container">
    
      
        

  
  
         

        
        
        
       
         
         
        
       
             
          

    
    @else
    <div style="text-align: center" class="container">
    <p >К сожалению список вариантов пуст:(</p>
     @endif
     <br><br><br><br>
     
     
       
            
                    

            
            
            
            

     
     
     
@stop

