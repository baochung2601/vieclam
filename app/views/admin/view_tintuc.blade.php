@extends('body_admin')
@section('content')
<div class="quanly-tintuc">
	<h1>Quản lý tin tức đã đăng</h1>
	@if(Session::has('tintuc_success'))
		<div class="text-success"><h2>{{Session::get('tintuc_success')}}</h2></div>
	@endif
	@foreach($tintuc as $value)
		<div class="adm-tintuc">
			<div class="row">
				<div class="col-sm-3">
					<img src="{{asset($value->img)}}" alt="" class="img-thumbnail">
				</div>
				<div class="col-sm-9">
					<h3>{{$value->title}}</h3>
					<b>Đăng bởi {{$value->user}}</b><br/>
					<b>Ngày đăng {{$value->thoigian}}</b><br/>					
				</div>
			</div>
			<a href="{{route('edit_tintuc',array($value->id))}}" target="_blank" class="btn btn-primary" style="float:left">Chỉnh sửa</a>
			{{Form::open(array('route'=>'delete_tintuc'))}}
			{{Form::hidden('id',$value->id)}}
			{{Form::hidden('img',$value->img)}}
			{{Form::hidden('url',URL::full())}}
			{{Form::submit('Xóa bỏ',array('class'=>'btn btn-danger'))}}
			{{Form::close()}}
		</div>
	@endforeach
	{{$tintuc->links()}}
</div>
@stop
