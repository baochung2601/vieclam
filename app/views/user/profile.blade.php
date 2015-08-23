@extends('body')
@section('title')
	{{$title}}
@stop
@Section('content')
	<div class="user-update">
		@if(Session::has('success'))
			<div class="user_update_success text-success">
			<h3>{{Session::get('success')}}</h3>
			</div>
		@endif
		<div class="user-username col-xs-12">
			Tài khoản: {{Auth::user()->username}}(<a href="{{URL::route('get_change_password')}}">Đổi mật khẩu</a>)(<a href="{{URL::route('user_post')}}">Tuyển dụng của tôi</a>)
		</div>
		<img src="{{asset(Auth::user()->img)}}" alt="hình đại diện" class="img-responsive img-thumbnail">
		@if(Session::has('error'))
			{{Session::get('error')}}
		@endif
		{{Form::open(array('route'=>'user_update', 'files'=>true))}}
		<p>Thay đổi hình đại diện</p>
		{{Form::file('img')}}
		{{$errors->first('img','<div class="text-error">:message</div>')}}
		{{Form::hidden('old_img',Auth::user()->img)}}
		<div class="user-hienthi">
			{{Form::label('hienthi','Tên hiển thị:')}}{{$errors->first('hienthi','<div class="text-error">:message</div>')}}<br/>
			{{Form::textarea('hienthi',Auth::user()->hienthi,array('rows'=>1))}}
		</div>
		<div class="user-email">
			<b>Email</b> {{Auth::user()->email}}
		</div>
		<div class="user-info">
			{{Form::label('info','Thông tin:')}}{{$errors->first('info','<div class="text-error">:message</div>')}}<br/>
			{{Form::textarea('info',Auth::user()->info,array('id'=>'user-info'))}}
		</div>
		Đăng kí ngày: {{Auth::user()->time}}<br/>
		{{Form::captcha()}}
		{{$errors->first('g-recaptcha-response','<div class="text-error">:message</div>')}}
		{{Form::submit('Cập nhật',array('class'=>'btn btn-primary'))}}
		{{Form::close()}}
	</div>
@stop