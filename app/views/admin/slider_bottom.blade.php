@extends('body_admin')
@section('content')
<div class="row form-slider-top">
	@if(Session::has('error'))
		<div class="text-danger"><h2>{{Session::get('error')}}</h2></div>
	@endif
	@if(Session::has('success'))
		<div class="text-success"><h2>{{Session::get('success')}}</h2></div>
	@endif
	{{Form::open(array('route'=>'post_slider_bottom','files' =>true))}}
	<h1>Thêm slider-bottom</h1>
	{{Form::file('img')}}
	{{Form::text('alt','',array('placeholder'=>'Nhập alt hình ảnh'))}}<br/>
	{{Form::text('url','',array('placeholder'=>'Nhập url hình ảnh'))}}<br/>
	{{Form::hidden('url_full',URL::full())}}
	{{Form::submit('Gửi',array('class'=>'btn btn-primary'))}}
	{{Form::close()}}
</div>
<div class="row delete-slide-top">
	@if(Session::has('delete_success'))
		<div class="text-success">{{Session::get('delete_success')}}</div>
	@endif
		<table class="table table-border">
		<tr>
		<td>Hình</td>
		<td>Xóa bỏ</td>
		</tr>

		@foreach($slider_bottom as $value)
			<tr>
			<td><img src="{{URL::to('/')}}/{{$value->url_img}}" alt="{{$value->alt_img}}" class="img-thumbnail" style="height: 200px"></td>
			<td>
				{{Form::open(array('route'=>'delete_slider_bottom'))}}
				{{Form::hidden('id',$value->id)}}
				{{Form::hidden('url_full',URL::full())}}
				{{Form::hidden('img',$value->url_img)}}
				{{Form::submit('Xóa',array('class'=>'btn btn-danger'))}}
				{{Form::close()}}
			</td>
			</tr>
		@endforeach
		</table>
</div>
@stop