@extends('body_admin')
@section('content')
	@if(Session::has('delete_user'))
	<h1>Xóa tài khoản</h1>
		<div class="text-success"><h3>{{Session::get('delete_user')}}</h3></div>
	@endif
		<table class="table table-border">
		<tr>
		<td>Tài khoản</td>
		<td>Xóa bỏ</td>
		<tr>
	@foreach($user as $value)
		<tr>
		<td>{{$value->username}}</td>
		<td>
			{{Form::open(array('route'=>'post_delete_user'))}}
			{{Form::hidden('id',$value->id)}}
			{{Form::hidden('url_full',URL::full())}}
			{{Form::submit('Xóa',array('class'=>"btn btn-danger deleteuser"))}}
			{{Form::close()}}
		</td>
		</tr>
	@endforeach
		</table>
	<div class="viewuser-pagination">
		{{$user->links()}}
	</div>
@stop