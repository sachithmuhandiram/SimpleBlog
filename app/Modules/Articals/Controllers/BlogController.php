<?php

namespace App\Modules\Articals\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Carbon;
use DB;
use App\Http\Controllers\Controller;
use App\Modules\Articals\Models\Blog; //to use Blog::create


class BlogController extends Controller
{
	public function index()
	{
		return view('Articals::index');
	}

	public function artical()
	{
		return view('Articals::artical');
	}

	public function addArtical()
	{
		return view('Articals::add_artical');
	}

	public function addPost()//Request $request
    {
    	/*
          $this->validate($request,[
            'blog_title' => 'required|min:10|max:255',
            'blog_post' => 'required|min:10'
          ]);*/

          DB::transaction(function(){
             $blog_post = Blog::create([
             'blog_title' => Input::get('blog_title'),
             'blog_post' =>Input::get('blog'),
             'user_id' => 4, //only for testing
             'likes'=>1,
             'dislikes'=>1,
             'created_at'=>Carbon\Carbon::now()
             ]);//$request->all()
        
         

            if( !$blog_post )
            {
                throw new \Exception('Blog post could not created ');
            }

        	});
         
          return redirect('blog');
          
    }
	
}

?>