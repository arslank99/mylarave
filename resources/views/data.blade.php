<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    
<ul>
@foreach($users as $user)
<li>{{$user->id}}</li>
<li>{{$user->name}}</li>
<li>{{$user->age}}</li>
<li>{{$user->class}}</li>
@endforeach
</ul>
    </body>
</html>	