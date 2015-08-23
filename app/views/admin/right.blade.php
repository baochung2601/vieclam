<div class="col-md-3 col-sm-3 col-xs-12 right">
	<div class="col-xs-12 bc-dangtin"><a href="{{URL::route('adm_dang_tin')}}" class="loai-11">Đăng tin</a></div>
	<div class="col-xs-12"><a href="{{URL::route('admin_page_tatca')}}" class="loai-0">Tất cả việc làm</a></div>
	<div class="col-xs-12"><a href="{{URL::route('admin_page_loai',array(1))}}" class="loai-1">Gia sư</a></div>
	<div class="col-xs-12"><a href="{{URL::route('admin_page_loai',array(2))}}" class="loai-2">Nhân viên bán hàng</a></div>
	<div class="col-xs-12 bc-css"><a href="{{URL::route('admin_page_loai',array(3))}}" class="loai-3">Phát tờ rơi, giữ xe,<br/>bảo vệ</a></div>
	<div class="col-xs-12 bc-css"><a href="{{URL::route('admin_page_loai',array(4))}}" class="loai-4">Nhà hàng, cà phê,<br/>Tiệc cưới</a></div>
	<div class="col-xs-12 bc-css"><a href="{{URL::route('admin_page_loai',array(5))}}" class="loai-5">PG-PB,Tiếp thị,<br/>Khảo sát thị trường</a></div>
	<div class="col-xs-12 bc-css"><a href="{{URL::route('admin_page_loai',array(6))}}" class="loai-6">Giúp việc nhà,<br/>trông coi cửa hàng</a></div>
	<div class="col-xs-12"><a href="{{URL::route('admin_page_loai',array(7))}}" class="loai-7">Thực tập viên</a></div>
	<div class="col-xs-12"><a href="{{URL::route('admin_page_loai',array(8))}}" class="loai-8">Cộng tác viên</a></div>
	<div class="col-xs-12"><a href="{{URL::route('admin_page_loai',array(9))}}" class="loai-9">Freelancer</a></div>
	<div class="col-xs-12 bc-css"><a href="{{URL::route('admin_page_loai',array(10))}}" class="loai-10">Kinh doanh mạng<br/>(Đa cấp)</a></div>
	<div class="col-xs-12 bc-css"><a href="{{URL::route('add_tintuc')}}" class="loai-14">Thêm tin tức</a></div>
	<div class="col-xs-12 bc-css"><a href="{{URL::route('quanly_tintuc')}}" class="loai-15">Quản lý tin tức</a></div>
	@if(Auth::user()->level == 3)
		<div class="col-xs-12"><a href="{{URL::route('gioithieu')}}" class="loai-12">Chỉnh sửa page</a></div>
		<div class="col-xs-12"><a href="{{URL::route('xoa_tai_khoan')}}" class="loai-13">Xóa tài khoản</a></div>
	@endif
</div>