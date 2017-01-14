<!DOCTYPE html>
<html>
<head>
	<title>Blog posts</title>
</head>
<body>
	
</body>
</html>
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
	            <div class="panel panel-default">
	                <div class="panel-heading">Blog posts <a href="addartical" class="col-md-offset-9"> Add a Post</a> </div>
		                <div class="panel-body">
		                    @foreach($blog as $posts)
								<h3><a href= blog/{{$posts->id}} > {{$posts->blog_title}}</a></h3>
								<p>{{$posts->blog_post}}</p> <!--put a p class and make this is fixed size.-->
								<a href=blog/{{$posts->id}}/like  name="like" class="btn btn-info btn-xs"> Likes ({{$posts->likes}})</a> 
								<a href=blog/{{$posts->id}}/dislike name="dislike" class="btn btn-warning btn-xs"> Dislikes ({{$posts->dislikes}})</a>
								
								<br>
							@endforeach
		                </div>
	            </div>
	        </div>
	    </div>
	</div>

</body>
</html>