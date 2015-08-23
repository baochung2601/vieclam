@extends('body_admin')
@section('content')
<div class="edit-tintuc">
	<h1>Chỉnh sửa tin tức</h1>
	@if(Session::has('tintuc_success'))
		<div class="text-success"><h2>{{Session::get('tintuc_success')}}</h2></div>
	@endif
	@if(Session::has('tintuc_error'))
		<div class="text-error"><h2>{{Session::get('tintuc_error')}}</h2></div>
	@endif
	{{Form::open(array('route'=>'post_edit_tintuc'))}}
	{{Form::label('title','Tiêu đề bài viết')}}<br/>
	{{Form::textarea('title',$tintuc->title,array('rows'=>2,'style'=>'width:100%'))}}<br/>
	{{Form::label('mota','Mô tả:')}}<br/>
	{{Form::textarea('mota',$tintuc->mota,array('rows'=>3,'style'=>'width:100%'))}}<br/>
	{{Form::label('noidung','Nội dung')}}
	{{Form::textarea('noidung',$tintuc->noidung,array('id'=>'edit-tintuc'))}}
	{{Form::hidden('url',URL::full())}}
	{{Form::hidden('id',$tintuc->id)}}
	{{Form::submit('Thay đổi',array('class'=>'btn btn-primary'))}}
	{{Form::close()}}
</div>
@stop
