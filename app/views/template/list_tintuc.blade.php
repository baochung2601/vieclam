@extends('body')
@section('title')
	{{$title}}
@stop
@section('content')
<div class="tintuc">
	<div class="title-tintuc text-primary"><h1><span class="glyphicon glyphicon-hand-right"></span> Tin việc làm</h1></div>
	<?php $i=1; ?>
	@foreach($tintuc as $value)
		<div class="row tintuc-info">
			<div class="col-sm-3"><img src="{{asset($value->img)}}" alt="việc làm sinh viên đà nẵng" class="img-thumbnail"></div>
			<div class="title col-sm-9">
			<a href="{{URL::route('view_tintuc',array($value->id, Title::title_url($value->mota)))}}"><h2>{{$value->title}}</h2></a>
			{{$value->mota}}
			</div>
		</div>
		<?php $i++ ?>
	@endforeach
	<div class="pagination">
	{{$tintuc->links()}}
	</div>
</div>
@stop