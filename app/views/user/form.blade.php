@extends('body')
@section('title')
	{{$title}}
@stop
@section('content')
	<div class="form-dangtin">
		<h1>Đăng tin tuyển dụng</h1>
		@if(Session::has('user_post_error'))
			<div class="user-post-error">{{Session::get('user_post_error')}}</div>
		@endif
		{{Form::open(array('route'=>'post_dangtin'))}}
		{{Form::label('title','Tiêu đề:')}}<br/>
		{{Form::textarea('title','',array('rows'=>2,'class'=>'post-title'))}}<br/>
		{{Form::label('loai','Chọn nghành nghề:')}}<br/>
		{{Form::select('loai',array('1'=>'Gia sư',
									'2'=>'Nhân viên bán hàng',
									'3'=>'Phát tờ rơi,giữ xe,bảo vệ',
									'4'=>'Nhân viên phục vụ',
									'5'=>'Lễ tân, PG-PB, Tiếp thị, Spa',
									'6'=>'Tạp vụ, giúp việc, trông coi cửa hàng',
									'7'=>'Thực tập viên',
									'8'=>'Cộng tác viên',
									'9'=>'Freelancer',
									'10'=>'Kinh doanh mạng',
									)
		)}}
		<div id="phanloai"></div>
		{{Form::label('mota','Mô tả ngắn gọn:')}}<br/>
		{{Form::textarea('mota','',array('rows'=>3,'style'=>'width:100%','class'=>'post-mota'))}}
		{{Form::label('noidung','Nội dung:')}}<br/>
		{{Form::textarea('noidung','',array('rows'=>6, 'id'=>'noidung'))}}
		{{Form::label('mucluong','Mức lương:')}}<br/>
		{{Form::textarea('mucluong','',array('rows'=>1))}}<br/>
		{{Form::label('soluong','Số lượng:')}}<br/>
		{{Form::textarea('soluong','',array('rows'=>1))}}<br/>
		{{Form::label('lienhe','Liên hệ:')}}<br/>
		{{Form::textarea('lienhe',' Tên người lên hệ (bắt buộc):
		Số điện thoại liên hệ (bắt buộc):
		Địa chỉ liên hệ (bắt buộc):
		Email (nếu có):
		Link facebook (nếu có):
		Website (nếu có):',array('rows'=>6))}}<br/>
		{{Form::captcha()}}
		{{Form::submit('Đăng tin',array('class'=>'btn btn-primary'))}}
		{{Form::close()}}
	</div>
@stop