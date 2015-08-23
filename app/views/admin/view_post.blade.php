@extends('body_admin')
@section('content')
	<h1>{{$post->title}}</h1>
	<div>
		<b>Mô tả:</b>
	{{$post->mota}}
	</div>
	<div>
		<b>Nội dung:</b>
	<pre>
	{{$post->noidung}}
	</pre>
	</div>
	<div>
		<b>Mức lương:</b>
	{{$post->mucluong}}
	</div>
	<div>
		<b>Số lượng:</b>
	{{$post->soluong}}
	</div>
	<div>
		<b>Liên hệ:</b>
	<pre>
	{{$post->lienhe}}
	</pre>
	</div>
	<div>
		<b>Đăng bởi:</b>
		<a href="{{URL::route('view_user',array($user->id,strtolower(Title::title_url($user->username))))}}">{{$user->hienthi}}</a>
	</div>
	<div>
		<b>Ngày đăng:</b>
	{{$post->time}}
	</div>
	<a href="{{URL::route('admin_post_edit',array($post->id))}}" class="btn btn-primary"> Chỉnh sửa</a>
@stop