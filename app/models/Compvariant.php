<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Compvariants
 *
 * @author Max
 */
class Compvariant extends Eloquent{
 public static $unguarded = true;
 
        public static function getAll()
   {
   
      $compvariant= Compvariant::all();
      
      return $compvariant;
   
   }
     
public static function get($id)
   {
       try{
         $component = Compvariant::where('id','=',$id)->firstOrFail();   
       } catch (Exception $ex) 
       {
           return  $types;
       }
      
       return  $compvariant;
   }

 public static function add($data5)
   {
       try{
            $compvariant = Compvariant::create(
                   
           [
               'id_component' => $data5['id_component'],
               'id_variant'=>$data5['id_variant']
               
               
               
           ]);
                   
       } catch (Exception $ex) {
            return $ex;
       }
   return $compvariant;
   }
}