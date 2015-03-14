<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Component
 *
 * @author Max
 */
class Component extends Eloquent{
 public static $unguarded = true;
 
 public static function getAll()
   {
   
      $component= Component::all();
      
      return $component;
   
   }
   

     
public static function get($id)
   {
       try{
         $component = Component::where('id','=',$id)->firstOrFail();   
       } catch (Exception $ex) 
       {
           return  $types;
       }
      
       return  $component;
   }

 public static function add($data2)
   {
       try{
            $component = Component::create(
                   
           [
               'name' => $data2['name_comp'],
               'type_id'=>$data2['type_id']
               
               
               
           ]);
                   
       } catch (Exception $ex) {
            return $ex;
       }
   return $component;
   }
}