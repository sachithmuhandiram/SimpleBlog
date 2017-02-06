<!DOCTYPE html>
<html>
<head>
	<title>{{$post->blog_title}}</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body>

	<div class="container">
	    <div class="row">
	        <div class="col-md-12 col-md-offset-0">
	            <div class="panel panel-default">
	                <div class="panel-heading"> {{$post->blog_title}} 
	                			<a href="{{ url('blog') }}" class="btn-xs col-md-offset-8">Home</a>

	                			@if(Auth::user())
	                			<a href="{{url ('logout')}}" class="">Logout </a>
	                			@else
	                			<a href="{{url ('/')}}" class="">Login </a>
	                			@endif			
	                </div>
		                <div class="panel-body" style="">
		                <!--Error if user is not loged in -->
		                @if(Session::has('warn'))
		                <div class="row">
		                      <div class="col-md-3 col-md-offset-4 warning" style="background-color: #ff6666; text-align: center;">
		                          {{Session::get('warn')}}
		                      </div>
		                 </div>          
		                @endif
		                   
								<p>{{$post->blog_post}}</p> 
								<br>
								<a href={{$post->id}}/like  name="like" class="btn btn-info btn-xs"> Likes ({{$likes}})</a> 
								<a href={{$post->id}}/dislike name="dislike" class="btn btn-warning btn-xs"> Dislikes ({{$dislikes}})</a>
								<br><br>

								<!--Comment showing box-->
								<div class="panel panel-default" style="max-width:500px; background-color: #ccff99; max-height:200px; overflow-y: scroll;">
								    <div class="panel-heading" style="background-color: #33adff;"> Comments for {{$post->blog_title}}</div><br>

									    	<div class="panel panel-default" style="max-width:400px; background-color: #ccff99;">
												@foreach ($comment as $cmt)
										    	    	<div class="panel-body" style="background-color: #ffff80;">
										    	    		<p>{{$cmt->comment}}</p>
										    			</div>
										    		<div class="panel-footer" style="background-color:#99ffeb ;"> <a href= "author/{{$cmt->user->name}}">{{$cmt->user->name}}</a></div><br>

									    		@endforeach	
									    	</div> 
									    		
								</div>
								</div>

								<!--comment box is available only if the user is logged in-->
								<br><br>
								@if(Auth::user())
									<form class="form-horizontal" role="form" method="POST" action="{{ url('/addcomment') }}">{{ csrf_field() }}
									<div class="col-md-6">
										<!--passing blog_id and user_id as hidden fields-->
										<input name="blog_id" type="hidden" value="{{$post->id}}">
										<input name="user_id" type="hidden" value="{{Auth::user()->id}}">
		                                <textarea rows="2" cols="34" name="comment" placeholder="Enter your Comment"> </textarea>

		                            </div>
		                            <br>
		                            
	                            	<div class="col-md-6 col-md-offset-2">
	                                    <button type="submit" class="btn btn-xs btn-primary">
	                                        <i class="fa fa-btn"></i> Comment
	                                    </button>

	                                </div>	
		                            </form>
		                        @else
		                        	<div class="col-md-6">
		                        		<b>Please login to comment for this post</b>
		                        	</div>
	                            @endif
		                </div>
		                
	            </div>
	        </div>
	    </div>
	</div>

</body>
</html>