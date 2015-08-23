@extends('body_admin')
@section('content')
<div class="adm-add-ql">
	<h1>Thêm quản lý</h1>
	@if(Session::has('success'))
		<div class="text-primary"><h3>{{Session::get('success')}}</h3></div>
	@endif
	@if(Session::has('error'))
		<div class="text-warning"><h3>{{Session::get('error')}}</h3></div>
	@endif
			{{Form::open(array('route'=>'post_add_ql'))}}
			{{Form::hidden('url',URL::full())}}
			{{Form::label('username','Username:')}}<br/>
			{{Form::text('username')}}<br/>
			{{Form::label('password','Password:')}}<br/>
			{{Form::password('password')}}<br/>
			{{Form::label('re_password:','Re-Password:')}}<br/>
			{{Form::password('re_password')}}<br/>
			{{Form::label('eamil','Email:')}}<br/>
			{{Form::email('email')}}<br/>
			{{Form::submit('Tạo tài khoản',array('class'=>'btn btn-primary'))}}
			{{Form::close()}}
</div>
@stop