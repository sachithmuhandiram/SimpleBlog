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
	                <div class="panel-heading"> {{$post->blog_title}} </div>
		                <div class="panel-body">
		                   
								<p>{{$post->blog_post}}</p> 
								<br>
								<a href={{$post->id}}/like  name="like" class="btn btn-info btn-xs"> Likes ({{$likes}})</a> 
								<a href={{$post->id}}/dislike name="dislike" class="btn btn-warning btn-xs"> Dislikes ({{$dislikes}})</a>
							
		                </div>
	            </div>
	        </div>
	    </div>
	</div>

</body>
</html>