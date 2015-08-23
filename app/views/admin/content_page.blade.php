@extends('body_admin')
@section('content')
	@if(Session::has('success'))
		<div class="text-primary"><h3>{{Session::get('success')}}</h3></div>
	@endif
<div class="post admin-post">
	@foreach($post as $value)
		<div class="post-info">
			<a href="{{URL::route('admin_page_view',array($value->id,$value->loai))}}" target="_blank"><h2>{{$value->title}}</h3></a>
			<div class="col-xs-1" style="margin-right:10px">
			{{Form::open(array('route'=>'page_delete'))}}
			{{Form::hidden('id',$value->id)}}
			{{Form::hidden('url',URL::full())}}
			{{Form::submit('Xóa tin',array('class'=>'btn btn-warning'))}}
			{{Form::close()}}
			</div>
		</div>
	@endforeach
	<div class="pagination">
	{{$post->links()}}
	</div>
</div>
@stop