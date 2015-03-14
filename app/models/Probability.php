<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Probability
 *
 * @author Max
 */
class Probability extends Eloquent{
    
     public static $unguarded = true;

    public static function getAll()
   {
   
      $probs= Probability::all();
      
      return $probs;
   
}
}
