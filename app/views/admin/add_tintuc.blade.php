@extends('body_admin')
@section('content')
<div class="add-tintuc">
	<h1>Thêm tin tức</h1>
	@if(Session::has('tintuc_success'))
		<div class="text-success"><h2>{{Session::get('tintuc_success')}}</h2></div>
	@endif
	@if(Session::has('tintuc_error'))
		<div class="text-error"><h2>{{Session::get('tintuc_error')}}</h2></div>
	@endif
	{{Form::open(array('route'=>'post_add_tintuc','files'=>true))}}
	{{Form::label('img','Hình đại diện')}}
	{{Form::file('img')}}<br/>
	{{Form::label('title','Tiêu đề bài viết')}}<br/>
	{{Form::textarea('title','',array('rows'=>2,'style'=>'width:100%'))}}<br/>
	{{Form::label('mota','Nhập nội dung ngắn gọn để hiển thị ban đầu:')}}<br/>
	{{Form::textarea('mota','',array('rows'=>2,'style'=>'width:100%'))}}<br/>
	{{Form::label('noidung','Nhập nội dung tin tức:')}}<br/>
	{{Form::textarea('noidung','',array('id'=>'add-tintuc'))}}<br/>
	{{Form::hidden('url',URL::full())}}
	{{Form::submit('Đăng tin',array('class'=>'btn btn-primary'))}}
	{{Form::close()}}
</div>
@stop
