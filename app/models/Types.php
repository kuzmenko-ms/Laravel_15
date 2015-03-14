<?php


class Types extends Eloquent{
     public static $unguarded = true;
 
        public static function getAll()
   {
   
      $types= Types::all();
      
      return $types;
   
   }
     
public static function get($id)
   {
       try{
         $types = Types::where('id','=',$id)->firstOrFail();   
       } catch (Exception $ex) 
       {
           return  $types;
       }
      
       return  $types;
   }

 public static function add($data2)
   {
       try{
            $types = Types::create(
                   
           [
               'name' => $data2['name'],
               
               
               
               
           ]);
                   
       } catch (Exception $ex) {
            return $ex;
       }
   return $types;
   }
}