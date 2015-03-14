<?php

class HomeController extends BaseController {

public function index()
{    
 $posts = Post::getAll();
 //return View::make('home');
 return View::make('home')
         ->with('posts',$posts);
 
}

public function showPlot(){
 return View::make('plot.show');   
}





}
