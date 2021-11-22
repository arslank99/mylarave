<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>form</title>
</head>
<body>
<div class="set">
   <form action="form" method="POST">
       @csrf
       <input type="text" name="name" placeholder="Name"><br>
       @error('name')
       <div>{{$message}}</div>
       @enderror
       <input type="password" name="password" placeholder="Password"><br>
       @error('password')
       <div>{{$message}}</div>
       @enderror
       <input type="submit" name="submit">
   </form>
</div>
<h1>{{$user}}</h1>
</body>
</html>