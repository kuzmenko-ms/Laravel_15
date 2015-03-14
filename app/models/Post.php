<?php

class Post extends Eloquent{
    public static $unguarded = true;

    public static function getAll()
   {
   
      $posts = Post::all();
      
      return $posts;
   
   }
   
   public static function get($id)
   {
       try{
         $post = Post::where('id','=',$id)->firstOrFail();   
       } catch (Exception $ex) 
       {
           return $ex;
       }
      
       return $post;
   }
   
   public static function add($data)
   {
       try{
           $post = Post::create(
                   
           [
               'title' => $data['title'],
               'description' => $data['description'],
               'author' => Auth::user()->username
               
               
           ]);
                   
       } catch (Exception $ex) {
            return $ex;
       }
   return $post;
   }
}