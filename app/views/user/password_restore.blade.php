@extends('body')
@section('content')
	<div class="col-sm-3"></div>
	<div class="col-sm-5 password-restore">
		<h1>Khôi phục mật khẩu</h1>
		@if(Session::has('error'))
			<div class="password-restore-error">{{Session::get('error')}}</div>
		@endif
		{{Form::open(array('route'=>'password_restore'))}}
		{{Form::hidden('username',$username)}}
		{{Form::label('password','Nhập mật khẩu mới:')}}<br/>
		{{Form::password('password')}}<br/>
		{{Form::label('re_password', 'Nhập lại mật khẩu mới:')}}<br/>
		{{Form::password('re_password')}}<br/>
		{{Form::hidden('url',URL::full())}}
		{{Form::submit('Đặt lại',array('class'=>'btn btn-primary'))}}
		{{Form::close()}}
	</div>
@stop