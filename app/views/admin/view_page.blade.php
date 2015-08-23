@extends('body_admin')
@section('content')
<div class="view-post">
	<h1>{{$page->title}}</h1>
	<div>
		<b>Mô tả:</b>
	{{$page->mota}}
	</div>
	<div>
		<b>Nội dung:</b>
	{{$page->noidung}}
	</div>
	<div>
		<b>Mức lương:</b>
	{{$page->mucluong}}
	</div>
	<div>
		<b>Số lượng:</b>
	{{$page->soluong}}
	</div>
	<div>
		<b>Liên hệ:</b>
	<pre>
	{{$page->lienhe}}
	</pre>
	</div>
	<div>
		<b>Đăng bởi:</b>
		<a href="{{URL::route('view_user',array($user->id,$user->username))}}">{{$user->hienthi}}</a>
	</div>
	<div>
		<b>Ngày đăng:</b>
	{{$page->time}}
	</div>
	<a href="{{URL::route('admin_page_edit',array($page->id))}}" class="btn btn-primary"> Chỉnh sửa</a>
</div>
@stop