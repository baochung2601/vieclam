@extends('body')
@section('meta')
<meta property="og:title" content="{{$tintuc->title}}" />
<?php $replace = array('<p>','</p>','<b>','</b>','<br>','<span>','</span>') ?>
<meta property="og:description" content="{{str_replace($replace,'',substr($tintuc->noidung,0,200))}}" />
<meta name="description" content="{{str_replace($replace,'',substr($post->title,0,200))}}">
<meta name="keywords" content="tim viec, viec lam, tuyen dung, sinh viên, việc làm sinh viên,việc làm sinh viên Đà Nẵng, tuyển dụng, việc làm, tim viec,sinh viên">
@stop
@section('title')
	{{$title}}
@stop
@section('content')
<div class="view-post">
	<h1>{{$tintuc->title}}</h1>
	{{$tintuc->noidung}}
	<div>
		<b>Ngày đăng:</b>
	{{$tintuc->thoigian}}
	</div>
	<div class="fb-share-button" data-href="{{URL::full()}}" data-layout="button_count"></div>
	<div class="fb-comments" data-href="{{URL::full()}}" data-numposts="5"></div>
</div>
@stop