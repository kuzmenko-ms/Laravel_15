<?php

class DirController extends BaseController{

    
    
    public function indexd()
{    
   $types = Types::getAll();
   $component = Component::getAll();
 
   $condprob = Condprob::getAll();
   $test = Compvariant::where('id_variant', '=', 2)->get();
   $test1 = Compvariant::where('id_variant', '=', 3)->get();
   $test2 = Compvariant::where('id_variant', '=', 4)->get();
   $variant = Variant::getAll();
   $compvariant= Compvariant::getAll();
   $res = $this->entropyForVariant();
   return View::make('directory.show-directory')
           ->with('types',$types)
           ->with('component',$component)
           ->with('condprob',$condprob)
           ->with('compvariant',$compvariant)
           ->with('variant',$variant)
           ->with('test',$test)
           ->with('test1',$test1)
           ->with('test2',$test2)
           ->with('some',$res)
        ;
  
  
}


public function entropyForVariant(){
           
    if (Request::ajax()) {
    $ids=$_POST['id_variant'];
    $variant = Variant::find($ids);
    $componentsOfVariant = Compvariant::where('id_variant', '=', $variant->id)->get();
    $components = array();
    foreach ($componentsOfVariant as $value) {
        $c = Component::find($value->id_component);
        array_push($components, $c);
    }
    
    $componentsProbs = array();
    $componentsConditionalProbs = array();
    
    foreach ($components as $value) {
        $comp2comp = Condprob::where('comp_one_id', '=', $value->id)->get();
        $totalProb = 0;
        
        $row = array();
        foreach ($comp2comp as $cond){
            $totalProb += ($cond->P);
            $row[$cond->comp_two_id] = $cond->P;
        }
        $componentsProbs[$value->id] = $totalProb;
        $componentsConditionalProbs[$value->id] = $row;
    }
    
    $res = 0;
    foreach ($componentsConditionalProbs as $key1 => $value1) {
        foreach ($value1 as $key2 => $value2) {
            $p = ($componentsProbs[$key1] * $componentsConditionalProbs[$key1][$key2]);
            $res -= $p * log($p);
        }
    }
    
    return $res;   
}}

public function addTypes(){
        $data2 = Input::only('name');
        $data = Input::only('name_comp', 'type_id');
        $data3 = Input::only('comp_one_id', 'comp_two_id','P');
        $data5 = Input::only('id_component', 'id_variant');
        $types = Types::add($data2);
        $component = Component::add($data);
        $condprob = Condprob::add($data3);
        $compvariant=  Compvariant::add($data5);
    return Redirect::to('/directory');
    }

    

   
    public function getTypes($id){
    $id = (int)$id;
    $types = Types::get($id);
    
    if($types instanceof Exception)
    {
        return 'error';
    }
    return View::make('directory.show-directory')->with('types',$types);
}
    public function destroy($id)
	{
		$types = Types::findOrFail($id);
        Types::destroy($id);
        
		
                
                return Redirect::to('/directory')->with('message', 'Удалили');
	}
    
        
        
    public function edit($id) {
        $types = Types::find($id);
        $view = View::make('directory.edit')
            ->with('types',$types);
     
        
        return View::make('directory.edit')->with('types',$types);
    }
    // Update
    public function update($id) {
        // Get parametters
        $request = Input::all();
      
       
            // Create instance
            $types = Types::find($id);
            $types->name = $request['name'];
            $types->save();
            return Redirect::to('/directory');
        
    }
    
}