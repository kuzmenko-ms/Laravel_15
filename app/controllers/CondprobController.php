<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CondprobController
 *
 * @author Max
 */
class CondprobController extends BaseController{
    
      
    public function getCondprob($id){
    $id = (int)$id;
    $condprob = Condprob::get($id);
    if($condprob instanceof Exception)
    {
        return 'error';
    }
    return View::make('directory.show-directory')->with('condprob',$condprob);
}
    public function destroy($id)
	{
		$condprob = Condprob::findOrFail($id);
                Condprob::destroy($id);
        
		
                
                return Redirect::to('/directory')->with('message', 'Удалили');
	}
}
