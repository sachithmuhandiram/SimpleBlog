<!DOCTYPE html>
<html>
<head>
	<title>Posts</title>

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
	            <div class="panel panel-default" style="max-height:2500px; overflow-y: scroll;">
	                <div class="panel-heading">Blog posts <a href="addartical" class="col-md-offset-9"> Add a Post</a> &emsp;&emsp;
	                @if(Auth::user())
	                <a href="logout" class="">Logout </a>
	                @else
	                <a href="{{url('/')}}" class="">Login </a>
	                @endif
	                </div>
	                	<!--Error if user is not loged in -->
	                	@if(Session::has('warn'))
	                	<div class="row">
	                	      <div class="col-md-3 col-md-offset-4 warning" style="background-color: #ff6666; text-align: center;">
	                	          {{Session::get('warn')}}
	                	      </div>
	                	 </div>          
	                	@endif
		                <div class="panel-body" style="height: 1500px; white-space: normal;verflow: hidden;text-overflow: ellipsis;">
		                    @foreach($blog as $posts)
								<h3><a href= "blog/{{$posts->blog_title}}" > {{$posts->blog_title}}</a></h3>
								<p>{{$posts->blog_post}}</p> <!--put a p class and make this is fixed size.-->
								
								<br>
							@endforeach
		                </div>
	            </div>
	        </div>
	    </div>
	</div>

</body>
</html>