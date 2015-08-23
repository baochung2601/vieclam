@extends('master')
@section('body')
<div class="row body">
@include('template.left')
<div class="col-sm-6 content">
@yield('content')		
</div>
@include('template.right')
</div>
	@include('template.slider_bottom')
@stop