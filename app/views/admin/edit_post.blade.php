@extends('body_admin')
@section('content')
	@if(Session::has('success'))
		<div class="text-primary"><h2>{{Session::get('success')}}</h2></div>
	@endif
<div class="edit-post">
	<h1>Chỉnh sửa nội dung</h1>
	{{Form::open(array('route'=>'admin_post_update'))}}
	{{Form::hidden('id',$post->id)}}
	{{Form::hidden('url',URL::full())}}
	{{Form::label('title','Tiêu đề:')}}<br/>
	{{Form::textarea('title',$post->title,array('rows'=>2))}}<br/>
	{{Form::label('mota','Mô tả:')}}<br/>
	{{Form::textarea('mota',$post->mota,array('rows'=>2))}}<br/>
	{{Form::label('noidung','Nội dung:')}}<br/>
	{{Form::textarea('noidung',$post->noidung,array('rows'=>8))}}<br/>
	{{Form::label('mucluong','Mức luong:')}}<br/>
	{{Form::text('mucluong',$post->mucluong)}}<br/>
	{{Form::label('soluong','Số lượng:')}}<br/>
	{{Form::text('soluong',$post->soluong)}}<br/>
	{{Form::label('lienhe','Liên hệ:')}}<br/>
	{{Form::textarea('lienhe',$post->lienhe,array('rows'=>7))}}<br/>
	{{Form::submit('Cập nhật',array('class'=>'btn btn-primary'))}}
	{{Form::close()}}
</div>
@stop