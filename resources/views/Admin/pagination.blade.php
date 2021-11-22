<div>
	@foreach ($data as $data1)
	<ul>
	    <li>{{$data1->id}}</li>
		<li>{{$data1->name}}</li>
		<li>{{$data1->class}}</li>
		<li>{{$data1->age}}</li>
	</ul>
	@endforeach
</div>
<div>


<!-- a Tag for previous page -->
<a href="{{$data->previousPageUrl()}}">
    <!-- You can insert logo or text here -->
</a>
@for($i=0;$i<=$data->lastPage();$i++)
    <!-- a Tag for another page -->
    <a href="{{$data->url($i)}}">{{$i}}</a>
@endfor
<!-- a Tag for next page -->
<a href="{{$data->nextPageUrl()}}">
    <!-- You can insert logo or text here -->
</a>
</div>