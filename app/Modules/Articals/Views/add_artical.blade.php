<!DOCTYPE html>
<html>
<head>
	<title>Add a post</title>

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
	        <div class="col-md-8 col-md-offset-2">
	            <div class="panel panel-default">
	               <div class="panel-heading">Add Blog post</div>
	                <div class="panel-body">
	                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/addpost') }}">
	                        {{ csrf_field() }}

	                        <div class="form-group">
                            	<label for="blog_title" class="col-md-4 control-label">Title</label>

	                            <div class="col-md-6">
	                                <input id="blog_title" type="text" class="form-control" name="blog_title" value="">

	                            </div>
                        	</div>

                        	<div class="form-group">
                            	<label for="blog" class="col-md-4 control-label">Post</label>

	                            <div class="col-md-6">
	                                <textarea rows="4" cols="50" name="blog" placeholder="Enter your Post" > </textarea>

	                            </div>
                        	</div>

                        	<div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn"></i> Submit
                                </button>

                            </div>

	                        
	                    </form>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

</body>
</html>