@extends('body')
@section('title')
	{{$title}}
@stop
@section('content')
	<div class="change-pass">
		<h1>Thay đổi mật khẩu</h1>
		@if(Session::has('change_pass_error'))
			<div class="change-pass-error">
			{{Session::get('change_pass_error')}}
			</div>
		@endif
	{{Form::open(array('route'=>'chang_pass'))}}
	{{Form::label('password','Mật khẩu cũ:')}}<br/>
	{{Form::password('password')}}<br/>
	{{Form::label('new_password','Mật khẩu mới')}}<br/>
	{{Form::password('new_password')}}<br/>
	{{Form::label('re_new_passwod','Nhập lại mật khẩu mới')}}<br/>
	{{Form::password('re_new_password')}}<br/>
	{{Form::captcha()}}
	{{Form::submit('Thay đổi')}}
	{{Form::close()}}
	</div>
@stop