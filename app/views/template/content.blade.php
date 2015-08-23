@extends('body')
@section('title')
	{{$title}}
@stop
@section('content')
<ul class="breadcrumb breadcrumb-content">
  <li><a href="{{URL::route('home')}}">Trang chủ</a></li>
  <li><h1>
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

  </h1></li>
</ul>
<div class="post">
	<?php $i=1; ?>
	@foreach($post as $value)
		<div class="post-info">
			<div class="title">
			<a href="{{URL::route('chi_tiet',array($value->id, strtolower(Title::title_url($value->title))))}}"><h2>{{$value->title}}</h3></a>
			</div>
			<div class="row">
				<div class="col-xs-6 icon">
					<span class="glyphicon glyphicon-gift"></span>  Ngày đăng: {{$value->thoigian}}<br/>
					<span class="glyphicon glyphicon-eye-open"></span> Lượt xem: {{$value->view}}<br/>
					<a href="javascript::void(0)"><span class="glyphicon glyphicon-hand-right"></span> Mô tả công việc</a>
				</div>
			</div>
			<div class="mota">
				<pre>
				{{$value->mota}}
				</pre>
			</div>
		</div>
		<?php $i++ ?>
	@endforeach
	<div class="pagination">
	{{$post->links()}}
	</div>
</div>
@stop