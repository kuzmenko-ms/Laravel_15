<?php

class PostController extends BaseController{
    
public function getPost($id){
    $id = (int)$id;
    $post = Post::get($id);
    if($post instanceof Exception)
    {
        return 'error';
    }
    return View::make('post.show-post')->with('post',$post);
}

  public function destroy($id)
	{
		$post = Post::findOrFail($id);
        Post::destroy($id);
        
		
                
                return Redirect::to('/')->with('message', 'Удалили');
	}
        
public function edit($id) {
        $post = Post::find($id);
        $view = View::make('post.edit')
            ->with('post',$post);
        
        return View::make('post.edit')->with('post',$post);;
    }
    // Update
    public function update($id) {
        // Get parametters
        $request = Input::all();
      
       
            // Create instance
            $post = Post::find($id);
            $post->title = $request['title'];
            $post->description = $request['description'];
            $post->save();
            return Redirect::to('/post/'.strval($id));
        
    }
    
    

    public function addPost(){
        $data = Input::all();
        $rules = [
         'title' =>'required|min:4',
         'description' => 'required|min:2'
            
        ];
        
        $val = Validator::make($data,$rules);
        if ($val->fails()){
            $errors = $val->messages()->toArray();
            return View::make('erorros.validation')->with('errors',$errors);
        }
        $post =Post::add($data);
         if($data instanceof Exception)
    {
        return 'error';
    }
    return Redirect::to('/');
    }
    
    
    
}