@extends('body')
@section('meta')
<meta property="og:title" content="{{$post->title}}" />
<?php $replace = array('<p>','</p>','<b>','</b>','<br>','<span>','</span>','<span','line-height','/>','>','"','<') ?>
<meta property="og:description" content="{{str_replace($replace,'',substr($post->noidung,0,200))}}" />
<meta name="description" content="{{str_replace($replace,'',substr($post->title,0,200))}}">
<meta name="keywords" content="tim viec, viec lam, tuyen dung, sinh viên, việc làm sinh viên,việc làm sinh viên Đà Nẵng, tuyển dụng, việc làm, tim viec,sinh viên">
@stop
@section('title')
	{{$title}}
@stop
@section('content')
<?php
if ($loai == 1) {
	$link = 'gia-su';
}elseif($loai == 2){
	$link = 'nhan-vien-ban-hang';
}elseif($loai == 3){
	$link = 'tuyen-nhan-vien-phat-to-roi-giu-xe-bao-ve';
}elseif($loai == 4){
	$link = 'nha-hang-ca-phe';
}elseif($loai == 5){
	$link = 'pg-pb-tiep-thi-khao-sat-thi-truong';
}elseif($loai == 6){
	$link = 'giup-viec-nha-trong-coi-cua-hang';
}elseif($loai == 7){
	$link = 'thuc-tap-vien';
}elseif($loai == 8){
	$link = 'cong-tac-vien';
}elseif($loai == 9){
	$link = 'cfreelance';
}else{
	$link = 'kinh-doanh-mang';
}
?>
<ul class="breadcrumb breadcrumb-viewpost">
  <li><a href="{{URL::route('home')}}">Trang chủ</a></li>
  <li><a href="{{URL::route('tim_viec',array($loai,$link))}}">
@if($loai == 0)
Tất cả việc làm
@elseif($loai == 1)
Gia sư
@elseif($loai == 2)
Nhân viên bán hàng
@elseif($loai == 3)
Phát tờ rơi, giữ xe, bảo vệ
@elseif($loai == 4)
Phà hàng, cafe, tiệc cưới
@elseif($loai == 5)
PG-PB, Tiếp thị, Khảo sát thị trường
@elseif($loai == 6)
Giúp việc nhà, trông coi cửa hàng
@elseif($loai == 7)
Thực tập viên
@elseif($loai == 8)
Cộng tác viên
@elseif($loai == 9)
Freelance
@elseif($loai == 10)
Đa cấp
@endif
</a></li>
<li>{{strtolower(Title::title_url($title))}}</li>
</ul>
<div class="view-post">
	<h1>{{$post->title}}</h1>
	<div>
		<b>Nội dung:</b>
		{{$post->noidung}}
	</div>
	<div>
		<b>Mức lương:</b>
		{{$post->mucluong}}
	</div>
	<div>
		<b>Số lượng:</b>
		{{$post->soluong}}
	</div>
	<div>
		<b>Liên hệ:</b>
	<pre>
		{{$post->lienhe}}
	</pre>
	</div>
	<div>
		<b>Đăng bởi:</b>
		<a href="{{URL::route('view_user',array($user->id,strtolower(Title::title_url($user->username))))}}">{{$user->hienthi}}</a>
	</div>
	<div>
		<b>Ngày đăng:</b>
	{{$post->thoigian}}
	</div>
	<div class="fb-share-button" data-href="{{URL::full()}}" data-layout="button_count"></div>
	<div class="fb-comments" data-href="{{URL::full()}}" data-numposts="5"></div>
</div>
@stop