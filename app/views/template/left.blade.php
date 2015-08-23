
<div class="col-sm-3 left">
		@if (isset($loai))
			@if ($loai == 1)
				 <div class="col-xs-13"><a href="{{URL::route('danh_muc',array(1,1,'gia-su'))}}" class="phan-loai-1">Lớp 1</a></div>
				 <div class="col-xs-13"><a href="{{URL::route('danh_muc',array(1,2,'gia-su'))}}" class="phan-loai-2">Lớp 2 - lớp 5</a></div>
				 <div class="col-xs-13"><a href="{{URL::route('danh_muc',array(1,3,'gia-su'))}}" class="phan-loai-3">Cấp 2</a></div>
				 <div class="col-xs-13"><a href="{{URL::route('danh_muc',array(1,4,'gia-su'))}}" class="phan-loai-4">Cấp 3</a></div>
				 <div class="col-xs-13"><a href="{{URL::route('danh_muc',array(1,5,'on-thi-tot-nghiep-dai-hoc'))}}" class="phan-loai-5">Ôn thi TN - ĐH</a></div>
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(1,6,'gia-su'))}}" class="phan-loai-6">Ngoại ngữ</a></div>
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(1,7,'gia-su'))}}" class="phan-loai-7">Khác</a></div>
			@elseif ($loai == 2)
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(2,1,'nhan-vien-ban-hang'))}}" class="phan-loai-1">Quận Hải Châu</a></div>
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(2,2,'nhan-vien-ban-hang'))}}" class="phan-loai-2">Quận Thanh Khê</a></div>
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(2,3,'nhan-vien-ban-hang'))}}" class="phan-loai-3">Quận Liên Chiểu</a></div>
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(2,4,'nhan-vien-ban-hang'))}}" class="phan-loai-4">Quận Ngũ Hành Sơn</a></div>
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(2,5,'nhan-vien-ban-hang'))}}" class="phan-loai-5">Quận Sơn Trà</a></div>
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(2,6,'nhan-vien-ban-hang'))}}" class="phan-loai-6">Quận Cẩm Lệ</a></div>
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(2,7,'nhan-vien-ban-hang'))}}" class="phan-loai-7">Huyện Hòa Vang</a></div>
			@elseif ($loai == 3)
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(3,1,'phat-to-roi-giu-xe-bao-ve'))}}" class="phan-loai-1">Quận Hải Châu</a></div>
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(3,2,'phat-to-roi-giu-xe-bao-ve'))}}" class="phan-loai-2">Quận Thanh Khê</a></div>
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(3,3,'phat-to-roi-giu-xe-bao-ve'))}}" class="phan-loai-3">Quận Liên Chiểu</a></div>
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(3,4,'phat-to-roi-giu-xe-bao-ve'))}}" class="phan-loai-4">Quận Ngũ Hành Sơn</a></div>
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(3,5,'phat-to-roi-giu-xe-bao-ve'))}}" class="phan-loai-5">Quận Sơn Trà</a></div>
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(3,6,'phat-to-roi-giu-xe-bao-ve'))}}" class="phan-loai-6">Quận Cẩm Lệ</a></div>
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(3,7,'phat-to-roi-giu-xe-bao-ve'))}}" class="phan-loai-7">Huyện Hòa Vang</a></div>
			@elseif ($loai == 4)
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(4,1,'nha-hang-ca-phe'))}}" class="phan-loai-1">Quận Hải Châu</a></div>
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(4,2,'nha-hang-ca-phe'))}}" class="phan-loai-2">Quận Thanh Khê</a></div>
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(4,3,'nha-hang-ca-phe'))}}" class="phan-loai-3">Quận Liên Chiểu</a></div>
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(4,4,'nha-hang-ca-phe'))}}" class="phan-loai-4">Quận Ngũ Hành Sơn</a></div>
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(4,5,'nha-hang-ca-phe'))}}" class="phan-loai-5">Quận Sơn Trà</a></div>
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(4,6,'nha-hang-ca-phe'))}}" class="phan-loai-6">Quận Cẩm Lệ</a></div>
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(4,7,'nha-hang-ca-phe'))}}" class="phan-loai-7">Huyện Hòa Vang</a></div>
			@elseif ($loai == 5)
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(5,1,'pg-pb-tiep-thi-khao-sat-thi-truong'))}}" class="phan-loai-1">Quận Hải Châu</a></div>
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(5,2,'pg-pb-tiep-thi-khao-sat-thi-truong'))}}" class="phan-loai-2">Quận Thanh Khê</a></div>
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(5,3,'pg-pb-tiep-thi-khao-sat-thi-truong'))}}" class="phan-loai-3">Quận Liên Chiểu</a></div>
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(5,4,'pg-pb-tiep-thi-khao-sat-thi-truong'))}}" class="phan-loai-4">Quận Ngũ Hành Sơn</a></div>
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(5,5,'pg-pb-tiep-thi-khao-sat-thi-truong'))}}" class="phan-loai-5">Quận Sơn Trà</a></div>
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(5,6,'pg-pb-tiep-thi-khao-sat-thi-truong'))}}" class="phan-loai-6">Quận Cẩm Lệ</a></div>
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(5,7,'pg-pb-tiep-thi-khao-sat-thi-truong'))}}" class="phan-loai-7">Huyện Hòa Vang</a></div>
			@elseif ($loai == 6)
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(6,1,'giup-viec-nha-trong-coi-cua-hang'))}}" class="phan-loai-1">Quận Hải Châu</a></div>
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(6,2,'giup-viec-nha-trong-coi-cua-hang'))}}" class="phan-loai-2">Quận Thanh Khê</a></div>
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(6,3,'giup-viec-nha-trong-coi-cua-hang'))}}" class="phan-loai-3">Quận Liên Chiểu</a></div>
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(6,4,'giup-viec-nha-trong-coi-cua-hang'))}}" class="phan-loai-4">Quận Ngũ Hành Sơn</a></div>
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(6,5,'giup-viec-nha-trong-coi-cua-hang'))}}" class="phan-loai-5">Quận Sơn Trà</a></div>
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(6,6,'giup-viec-nha-trong-coi-cua-hang'))}}" class="phan-loai-6">Quận Cẩm Lệ</a></div>
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(6,7,'giup-viec-nha-trong-coi-cua-hang'))}}" class="phan-loai-7">Huyện Hòa Vang</a></div>
			@elseif ($loai == 7)
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(7,1,'thuc-tap-vien'))}}" class="phan-loai-1 left-css">Truyền thông,<br/>Marketing</a></div>
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(7,2,'thuc-tap-vien'))}}" class="phan-loai-2">Ngân hàng</a></div>
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(7,3,'thuc-tap-vien'))}}" class="phan-loai-3">Du lịch</a></div>
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(7,4,'thuc-tap-vien'))}}" class="phan-loai-4">Viễn thông</a></div>
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(7,5,'thuc-tap-vien'))}}" class="phan-loai-5">Xây dựng,kiến trúc</a></div>
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(7,6,'thuc-tap-vien'))}}" class="phan-loai-6">Giáo dục, đào tạo</a></div>
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(7,7,'thuc-tap-vien'))}}" class="phan-loai-7">Kế toán, kiểm toán</a></div>
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(7,8,'thuc-tap-vien'))}}" class="phan-loai-8">Nhân viên kinh doanh</a></div>
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(7,9,'thuc-tap-vien'))}}" class="phan-loai-9">Ngành nghề khác</a></div>
			@elseif ($loai == 8)
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(8,1,'cong-tac-vien'))}}" class="phan-loai-1">Kinh doanh online</a></div>
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(8,2,'cong-tac-vien'))}}" class="phan-loai-2">Ngân hàng</a></div>
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(8,3,'cong-tac-vien'))}}" class="phan-loai-3">Truyền thông, marketing</a></div>
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(8,4,'cong-tac-vien'))}}" class="phan-loai-4">Giáo dục, đào tạo</a></div>
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(8,5,'cong-tac-vien'))}}" class="phan-loai-5">Du lịch</a></div>
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(8,6,'cong-tac-vien'))}}" class="phan-loai-6">Sim số</a></div>
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(8,7,'cong-tac-vien'))}}" class="phan-loai-7">Đánh máy tại nhà</a></div>
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(8,8,'cong-tac-vien'))}}" class="phan-loai-8">Ngành nghề khác</a></div>
			@elseif ($loai == 9)
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(9,1,'freelance'))}}" class="phan-loai-1">Copywriter</a></div>
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(9,2,'freelance'))}}" class="phan-loai-2">Đồ họa, thiết kế</a></div>
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(9,3,'freelance'))}}" class="phan-loai-3">IT và Lập trình</a></div>
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(9,4,'freelance'))}}" class="phan-loai-4">Kế toán, thuế và pháp lý</a></div>
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(9,5,'freelance'))}}" class="phan-loai-5">Marketing bán hàng</a></div>
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(9,6,'freelance'))}}" class="phan-loai-6">Ngành nghề khác</a></div>
			@elseif($loai == 10)
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(10,1,'kinh-doanh-mang'))}}" class="phan-loai-1">Amway</a></div>
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(10,2,'kinh-doanh-mang'))}}" class="phan-loai-2">Sao phương bắc (Oriflame)</a></div>
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(10,3,'kinh-doanh-mang'))}}" class="phan-loai-3">Herbalife</a></div>
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(10,4,'kinh-doanh-mang'))}}" class="phan-loai-4">World nets</a></div>
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(10,5,'kinh-doanh-mang'))}}" class="phan-loai-5">K – link</a></div>
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(10,6,'kinh-doanh-mang'))}}" class="phan-loai-6">Unicity</a></div>
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(10,7,'kinh-doanh-mang'))}}" class="phan-loai-7">Lô hội</a></div>
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(10,8,'kinh-doanh-mang'))}}" class="phan-loai-8">New life</a></div>
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(10,9,'kinh-doanh-mang'))}}" class="phan-loai-9">Vinalink group</a></div>
				 <div class="col-xs-12"><a href="{{URL::route('danh_muc',array(10,10,'kinh-doanh-mang'))}}" class="phan-loai-10">Công ty khác</a></div>
			@else
				
			@endif
		@endif
</div>