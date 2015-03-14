<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of VariantController
 *
 * @author Max
 */
class VariantController extends BaseController{
    
    public function destroy($id)
	{
		$variant = Variant::findOrFail($id);
                Variant::destroy($id);
        
		
                
                return Redirect::to('/directory')->with('message', 'Удалили');
	}
}
