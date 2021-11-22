<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Posts view</title>
</head>
<body>
	@foreach ($posts as $post)
		<h1><a href='post/{{$post->id}}'>{{$post->title}}</a></h1>
	@endforeach
</body>
</html>