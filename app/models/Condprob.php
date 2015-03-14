<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Condprob
 *
 * @author Max
 */
class Condprob extends Eloquent{
 public static $unguarded = true;
 
        public static function getAll()
   {
   
      $condprob= Condprob::all();
      
      return $condprob;
   
   }
     
public static function get($id)
   {
       try{
         $condprob = Condprob::where('id','=',$id)->firstOrFail();   
       } catch (Exception $ex) 
       {
           return  $condprob;
       }
      
       return  $condprob;
   }

 public static function add($data3)
   {
       try{
            $condprob = Condprob::create(
                   
           [
               'comp_one_id' => $data3['comp_one_id'],
               'comp_two_id' => $data3['comp_two_id'],
               'P'=> $data3['P']
               
               
               
           ]);
                   
       } catch (Exception $ex) {
            return $ex;
       }
   return $condprob;
   }
}