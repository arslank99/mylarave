<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>my view</title>
</head>
<body>
<h1>This is My View Laravel</h1>
<h1>{{$name}}</h1>
<h1>{{$namesec}}</h1>
<h1>Time : {{time()}}</h1>
<h1>Squart : {{sqrt(64)}}</h1>

@if(2*2 == 4)
<h1>Answer is true</h1>
@else
<h1>your answer is not right</h1>
@endif


@if($name == 'Arslan')
   <h1>Answer is Arslan</h1>
@elseif($namesec == 'Zaid')
	<h1>your answer is Zaid</h1>
	@else
	<h1>this is your homemade answer</h1>
@endif



@isset($name)
<h1>{{$name}}</h1>
@endisset
@isset($namesec)
<h1>{{$namesec}}</h1>
@endisset


@empty($name)
<h1>{{$name}}</h1>
@endempty

@for($i = 0; $i < 10; $i++)
<h1>{{$i}}</h1>
@endfor

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem maxime maiores quisquam, 
alias aliquid dolor architecto nihil assumenda sed ex aspernatur aut! Impedit numquam beatae quam quos,
distinctio libero tempore.</p>

</body>
</html>

