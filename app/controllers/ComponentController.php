<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ComponentController
 *
 * @author Max
 */
class ComponentController extends BaseController{
   public function addComponent(){
        $data = Input::only('name_comp', 'type_id');
        $rules = [
         
            
        ];
        
        $val = Validator::make($data,$rules);
        if ($val->fails()){
            $errors = $val->messages()->toArray();
            return View::make('erorros.validation')->with('errors',$errors);
        }
        $component = Component::add($data);
         if($data instanceof Exception)
    {
        return 'error';
    }
    return Redirect::to('/directory');
    }

    

   
    public function getComponent($id){
    $id = (int)$id;
    $component = Component::get($id);
    if($component instanceof Exception)
    {
        return 'error';
    }
    return View::make('directory.show-directory')->with('component',$component);
}
    public function destroy($id)
	{
		$component = Component::findOrFail($id);
        Component::destroy($id);
        
		
                
                return Redirect::to('/directory')->with('message', 'Удалили');
	}
    
        
        
    public function edit($id) {
        $component = Component::find($id);
   $types = Types::getAll();
        $view = View::make('directory.editc')
            ->with('component',$component);
     
        
        return View::make('directory.editc')->with('component',$component)->with('types',$types);
    }
    // Update
    public function update($id) {
        // Get parametters
        $request = Input::all();
      
       
            // Create instance
            $component = Component::find($id);
            $component->name = $request['name'];
            $component->type_id = $request['type_id'];
           $component->save();
            return Redirect::to('/directory');
        
    }
    
}