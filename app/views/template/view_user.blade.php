@extends('body')
@section('content')
<div class="view-user">
	<h1>Thông tin người đăng:</h1>
	<div class="hienthi">
	<h3>{{$user->hienthi}}</h3>
	</div>
	<div class="img">
	<img src="{{URL::to($user->img)}}" alt="ảnh đại diện" class="img-responsive">
	</div>
	<div class="info">
		<b>Giới thiệu:</b>
	{{$user->info}}
	</div>
</div>
@stop