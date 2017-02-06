<!DOCTYPE html>
<html>
<head>
	<title>Authors</title>
</head>
<body>
	<p>This is testing for Authors</p>
	@foreach($author as $authors)
		<p>{{$authors->email}}</p>
		<br>
		<p>{{$authors->name}}</p>
	@endforeach
</body>
</html>