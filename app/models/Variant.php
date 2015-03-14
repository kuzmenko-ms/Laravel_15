<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Variant
 *
 * @author Max
 */
class Variant extends Eloquent{
     public static $unguarded = true;
 
        public static function getAll()
   {
   
      $variant= Variant::all();
      
      return $variant;
   
   }
     
public static function get($id)
   {
       try{
         $variant = Variant::where('id','=',$id)->firstOrFail();   
       } catch (Exception $ex) 
       {
           return  $variant;
       }
      
       return  $variant;
   }

 public static function add($data4)
   {
       try{
            $variant = Variant::create(
                   
           [
               'matual_entropy' => $data4['matual_entropy'],
               
               
               
               
           ]);
                   
       } catch (Exception $ex) {
            return $ex;
       }
   return $variant;
   }
}