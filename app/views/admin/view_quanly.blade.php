@extends('body_admin')
@section('content')
<div class="view-quanly">
	<div class="text-warning"><h1>Xóa bỏ thành viên quản lý</h1>
		<h3>Thao tác này không thể hoàn tác,cẩn thận.</h3>
	</div>
	@foreach($quanly as $value)
	<div class="row">
		<div class="col-xs-3">
		<a href="{{URL::route('view_user',array($value->id,$value->username))}}" target="_blank"><h3>{{$value->hienthi}}</h3></a>
		</div>
		<div class="col-xs-1">
		{{Form::open(array('route'=>'delete_ql'))}}
		{{Form::hidden('id',$value->id)}}
		{{Form::hidden('url',URL::full())}}
		{{Form::submit('Xóa bỏ',array('class'=>'btn btn-danger'))}}
		{{Form::close()}}
		</div>
	</div>
	@endforeach
</div>
@stop