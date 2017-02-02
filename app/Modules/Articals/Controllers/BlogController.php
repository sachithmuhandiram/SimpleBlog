<?php

namespace App\Modules\Articals\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Carbon;
use DB;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use App\Http\Controllers\Controller;
use App\Modules\Articals\Models\Blog; //to use Blog::create
use App\Modules\Articals\Models\Vote; //to vote Vote::create
use App\Modules\Articals\Models\Votetype; //to vote Vote::create
use App\Modules\Articals\Models\Comment; //to comment Comment::create


class BlogController extends Controller
{

	public function index()
    {  //update to view posts
        $blog = Blog::all();
        //likes for individual post?
        //$blog =substr('.$blogs.',0,500); //return only 500 words
        return view('Articals::index')->with('blog',$blog);
    }

	public function artical()
	{
		return view('Articals::artical');
	}

	public function addArtical()
	{
    if (Auth::user()) { //if user is logged in
      return view('Articals::add_artical');

    } else {
      return redirect('blog')->with(['warn'=>'You must login to add a blog']);
    }
    
		
	}

	public function addPost(Request $request)//Request $request
    {
        
        //return $user_id;
    	
          $this->validate($request,[
            'blog_title' => 'required|min:10|max:255',
            'blog_post' => 'required|min:10'
          ]);

          DB::transaction(function(){
            $user_id = Auth::user()->id;

             $blog_post = Blog::create([
             'blog_title' => Input::get('blog_title'),
             'blog_post' =>Input::get('blog_post'),
             'user_id' => $user_id, //only for testing
             'likes'=>0,
             'dislikes'=>0,
             'created_at'=>Carbon\Carbon::now()
             ]);//$request->all()
        
         

            if( !$blog_post )
            {
                throw new \Exception('Blog post could not created ');
            }

            });
         
          return redirect('blog');
          
    }
	//for error messages
    public function messages()
    {
        return [
            'blog_title.required' => 'A title is required',
            'blog_post.required'  => 'A message is required',
        ];
    }

    public function likePost($id)
    {
    
        $type = Votetype::where('votetype','=','likes')
                            ->pluck('id');

        if (!(Auth::user())) {
          return back()->with(['warn'=>'You must login to vote for a post']);
        } else {

        $user_id = Auth::user()->id;

        /*
            * The following is check whether user is voted for this post
            * If voted, then count is != 0 
            * This has to be used because isset() was not working
        */
        $voteid = Vote::where('post_id','=',$id)
                        ->where('user_id','=',$user_id)
                        ->where('type_id','=',$type[0])
                        ->select('id')
                        ->get()
                        ->count();

        if ($voteid==0) {
            $like = Vote::create([
                        'post_id' => $id,
                        'user_id' => $user_id,
                        'type_id' => $type[0],
                        ]);
            return back();
        } else {
            return back();
        }

      } //user auth checking if loop
        
    }

    public function dislikePost($id)
    {
        $type = Votetype::where('votetype','=','dislikes')
                            ->pluck('id');
                        
        if (!(Auth::user())) {
          return back()->with(['warn'=>'You must login to vote for a post']);
        } else {

        $user_id = Auth::user()->id;

        $voteid = Vote::where('post_id','=',$id)
                        ->where('user_id','=',$user_id)
                        ->where('type_id','=',$type[0])
                        ->select('id')
                        ->get()
                        ->count();

        if ($voteid==0) {
            $dislike = Vote::create([
                            'post_id' => $id,
                            'user_id' => $user_id,
                            'type_id' => $type[0],
                            ]);
            return back();
        } else {
            return back();
        }
      } //end of main auth user if
        
            

    }

    public function showPost($blog_title){

        //comment count should be here
        $post = Blog::where('blog_title','=',$blog_title)
                        ->firstOrFail();

        $blog_id = Blog::where('blog_title','=',$blog_title)
                            ->pluck('id');
    

        $likes = Vote::where('post_id','=',$blog_id[0])
                        ->where('type_id','=',1)
                        ->get()
                        ->count();
                                
        $dislikes = Vote::where('post_id','=',$blog_id[0])
                        ->where('type_id','=',2)
                        ->get()
                        ->count(); 

        $comment  = Comment::where('blog_id','=',$blog_id[0])
                                ->get();  

        return view('Articals::post')->with('post',$post)->with('likes',$likes)->with('dislikes',$dislikes)->with('comment',$comment);
    }

    public function addComment(Request $request){

        $this->validate($request,[
          'comment' => 'required|min:2|max:255'  
        ]);

       //user_id, blog_id
        DB::transaction(function(){
            
           $comment = Comment::create([
           'comment' => Input::get('comment'),
           'blog_id' =>Input::get('blog_id'),
           'user_id' => Input::get('user_id'), 
           'created_at'=>Carbon\Carbon::now()
           ]);//$request->all()
        
        

          if( !$comment )
          {
              throw new \Exception('Comment was not posted');
          }

          });
        
        return back();
        
    }

}

?>