@extends('master')
@section('body')
<div class="container home">
	<div class="row row1">
		<div class="col-md-3 col-sm-3"><a href="{{URL::route('home')}}" class="bc-mau1 padding-1"></a></div>
		<div class="col-md-3 col-sm-3"><a href="{{URL::route('tim_viec',array(5,'pg-pb-tiep-thi-khao-sat-thi-truong'))}}" class="bc-mau2 padding-2"><h2>LỄ TÂN, PG-PB,<br/>TIẾP THỊ, SPA</h2></a></div>
		<div class="col-md-3 col-sm-3"><a href="{{URL::route('tim_viec',array(6,'giup-viec-nha-trong-coi-cua-hang'))}}" class="bc-mau1 padding-2"><h2>TẠP VỤ, GIÚP VIỆC<br/>TRÔNG COI CỬA HÀNG</h2></a></div>
		<div class="col-md-3 col-sm-3"><a href="{{URL::route('tim_viec',array(3,'phat-to-roi-giu-xe-bao-ve'))}}" class="bc-mau2 padding-3"><h2>PHÁT TỜ RƠI<br/>BẢO VỆ<br/>GIỮ XE</h2></a></div>
	</div>
	<div class="row">
		<div class="col-md-6 col-sm-6 bc-dangtin"><a href="{{URL::route('get_dangtin')}}" class="bc-mau3 padding-4"><h1>ĐĂNG TIN<br>TUYỂN DỤNG</h1></a></div>
		<div class="col-md-3 col-sm-3"><a href="{{URL::route('tim_viec',array(1,'gia-su'))}}" class="bc-mau2 padding-1"><h2>GIA SƯ</h2></a></div>
		<div class="col-md-3 col-sm-3"><a href="{{URL::route('tim_viec',array(2,'nhan-vien-ban-hang'))}}" class="bc-mau1 padding-2"><h2>NHÂN VIÊN<br/>BÁN HÀNG</h2></a></div>
		<div class="col-md-3 col-sm-3"><a href="{{URL::route('tim_viec',array(4,'nha-hang-ca-phe'))}}" class="bc-mau1 padding-2"><h2>NHÂN VIÊN<br/>PHỤC VỤ</h2></a></div>
		<div class="col-md-3 col-sm-3"><a href="{{URL::route('tim_viec',array(7,'thuc-tap-vien'))}}" class="bc-mau2 padding-1"><h2>THỰC TẬP VIÊN</h2></a></div>
	</div>
	<div class="row row3">
		<div class="col-md-3 col-sm-3"><a href="{{URL::route('tim_viec',array(8,'cong-tac-vien'))}}" class="bc-mau2 padding-1"><h2>CỘNG TÁC VIÊN</h2></a></div>
		<div class="col-md-3 col-sm-3"><a href="{{URL::route('tim_viec',array(9,'freelance'))}}" class="bc-mau1 padding-1"><h2>FREELANCER</h2></a></div>
		<div class="col-md-3 col-sm-3"><a href="{{URL::route('tim_viec',array(10,'kinh-doanh-mang'))}}" class="bc-mau2 padding-2"><h2>KINH DOANH THEO MẠNG<br/>(ĐA CẤP)</h2></a></div>
		<div class="col-md-3 col-sm-3"><a href="{{URL::route('tat_ca')}}" class="bc-mau1 padding-1"><h2>TẤT CẢ VIỆC LÀM</h2></a></div>
	</div>
</div>
@stop