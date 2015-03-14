<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CompvariantController
 *
 * @author Max
 */
class CompvariantController extends BaseController{
    
      
    public function getCompvarinat($id){
    $id = (int)$id;
    $compvariant = Compvariant::get($id);
    if($compvariant instanceof Exception)
    {
        return 'error';
    }
    return View::make('directory.show-directory')->with('compvariant',$compvariant);
}
    public function destroy($id)
	{
		$compvariant = Compvariant::findOrFail($id);
                Compvariant::destroy($id);
        
		
                
                return Redirect::to('/directory')->with('message', 'Удалили');
	}
}
