@extends('inherit.layout')
@section('title', 'Page Title New ')
@section('content')
<h1>This is inheritence slicing</h1>
<p>Lorem ipsum, dolor sit amet consectetur adipisicing, elit. Sunt similique ut a minima, unde asperiores esse quos tenetur, facilis provident error iure quis quod consectetur repellat quasi doloremque pariatur libero.</p>
@endsection

@section('footer')
	CopyRight {{date('Y')}}
@endsection