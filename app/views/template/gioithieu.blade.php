@extends('body')
@section('title')
	@parent
	{{$title}}
@stop
@section('content')
<div class="gioithieu">
	{{$gioithieu->content}}
</div>
@stop