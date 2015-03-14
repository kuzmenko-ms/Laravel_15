<?php

class CompController extends BaseController{

    public function action_list() {
        $todos = Dir::all();
        return View::make('home')->with('todos', $todos);
}}
