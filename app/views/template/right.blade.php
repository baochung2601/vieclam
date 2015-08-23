<div class="col-sm-3 right">
@if(isset($phan_loai))

@else
	<div class="col-xs-12"><a href="{{URL::route('get_dangtin')}}" class="loai-11 bc-dangtin bc-css-1">Đăng tin</a></div>
	<div class="col-xs-12"><a href="{{URL::route('tat_ca')}}" class="loai-0 bc-css-1">Tất cả việc làm</a></div>
	<div class="col-xs-12"><a href="{{URL::route('tim_viec',array(1,'gia-su'))}}" class="loai-1 bc-css-1">Gia sư</a></div>
	<div class="col-xs-12"><a href="{{URL::route('tim_viec',array(2,'nhan-vien-ban-hang'))}}" class="loai-2 bc-css-1">Nhân viên bán hàng</a></div>
	<div class="col-xs-12"><a href="{{URL::route('tim_viec',array(3,'tuyen-nhan-vien-phat-to-roi-giu-xe-bao-ve'))}}" class="loai-3 bc-css-2">Phát tờ rơi, giữ xe,<br/>bảo vệ</a></div>
	<div class="col-xs-12"><a href="{{URL::route('tim_viec',array(4,'nha-hang-ca-phe'))}}" class="loai-4 bc-css-1">Nhân viên phục vụ</a></div>
	<div class="col-xs-12"><a href="{{URL::route('tim_viec',array(5,'pg-pb-tiep-thi-khao-sat-thi-truong'))}}" class="loai-5 bc-css-2">Lễ tân, PG-PB<br/>Tiếp thị, Spa</a></div>
	<div class="col-xs-12"><a href="{{URL::route('tim_viec',array(6,'giup-viec-nha-trong-coi-cua-hang'))}}" class="loai-6 bc-css-2">Tạp vụ, giúp việc<br/>trông coi cửa hàng</a></div>
	<div class="col-xs-12"><a href="{{URL::route('tim_viec',array(7,'thuc-tap-vien'))}}" class="loai-7 bc-css-1">Thực tập viên</a></div>
	<div class="col-xs-12"><a href="{{URL::route('tim_viec',array(8,'cong-tac-vien'))}}" class="loai-8 bc-css-1">Cộng tác viên</a></div>
	<div class="col-xs-12"><a href="{{URL::route('tim_viec',array(9,'freelance'))}}" class="loai-9 bc-css-1">Freelancer</a></div>
	<div class="col-xs-12"><a href="{{URL::route('tim_viec',array(10,'kinh-doanh-mang'))}}" class="loai-10 bc-css-2">Kinh doanh mạng<br/>(Đa cấp)</a></div>
@endif
</div>
