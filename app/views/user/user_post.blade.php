@extends('body')
@section('title')
	{{$title}}
@stop
@section('content')
	<div class="text-primary"><h1>Tuyển dụng đã đăng của tôi</h1></div>
<div class="post">
	@foreach($post as $value)
		<div class="post-info">
		<a href="{{URL::route('chi_tiet',array($value->id, Title::title_url($value->title)))}}" target="_blank"><h2>{{$value->title}}</h3></a>
		</div>
	@endforeach
	<div class="pagination">
	{{$post->links()}}
	</div>
</div>
@stop