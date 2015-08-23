<div class="col-md-3 col-sm-3 col-xs-12 left">
	<div class="col-xs-12"><a href="{{URL::route('admin_post_tatca')}}" class="phan-loai-0">Tất cả việc làm</a></div>
	<div class="col-xs-12"><a href="{{URL::route('admin_post_loai',array(1))}}" class="phan-loai-1">Gia sư</a></div>
	<div class="col-xs-12"><a href="{{URL::route('admin_post_loai',array(2))}}" class="phan-loai-2">Nhân viên bán hàng</a></div>
	<div class="col-xs-12 bc-css"><a href="{{URL::route('admin_post_loai',array(3))}}" class="phan-loai-3">Phát tờ rơi, giữ xe,<br/>bảo vệ</a></div>
	<div class="col-xs-12 bc-css"><a href="{{URL::route('admin_post_loai',array(4))}}" class="phan-loai-4">Nhà hàng, cà phê,<br/>Tiệc cưới</a></div>
	<div class="col-xs-12 bc-css"><a href="{{URL::route('admin_post_loai',array(5))}}" class="phan-loai-5">PG-PB,Tiếp thị,<br/>Khảo sát thị trường</a></div>
	<div class="col-xs-12 bc-css"><a href="{{URL::route('admin_post_loai',array(6))}}" class="phan-loai-6">Giúp việc nhà,<br/>trông coi cửa hàng</a></div>
	<div class="col-xs-12"><a href="{{URL::route('admin_post_loai',array(7))}}" class="phan-loai-7">Thực tập viên</a></div>
	<div class="col-xs-12"><a href="{{URL::route('admin_post_loai',array(8))}}" class="phan-loai-8">Cộng tác viên</a></div>
	<div class="col-xs-12"><a href="{{URL::route('admin_post_loai',array(9))}}" class="phan-loai-9">Freelancer</a></div>
	<div class="col-xs-12 bc-css"><a href="{{URL::route('admin_post_loai',array(10))}}" class="phan-loai-10">Kinh doanh mạng<br/>(Đa cấp)</a></div>
	<!-- <div class="col-xs-12 phan-loai-13"><a href="{{URL::route('slider_top')}}">Slider-top</a></div> -->
	<div class="col-xs-12"><a href="{{URL::route('slider_bottom')}}" class="phan-loai-14">Slider-bottom</a></div>
	@if(Auth::user()->level == 3)
		<div class="col-xs-12"><a href="{{URL::route('get_add_ql')}}" class="phan-loai-11">Thêm quản lý</a></div>
		<div class="col-xs-12"><a href="{{URL::route('view_ql')}}" class="phan-loai-12">Xóa quản lý</a></div>
		<div class="col-xs-12"><a href="{{URL::route('cache_clear')}}" class="">Dọn dẹp bộ nhớ đệm web</a></div>
	@endif

</div>