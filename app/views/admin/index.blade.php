@extends('body_admin')
@section('content')
<div class="text-primary">
	<h1>Hello admin!!!</h1>
	<h2>Bên trái là công việc chưa đăng</h2>
	<h2>Bên phải là công việc đã đăng</h2>
	<h3>Bạn có thể chọn vào một mục rồi đăng hoặc chỉnh sửa</h3>
	<hr/>
	@if(Auth::user()->level == 3)
	<div class="text-danger"><h4>Chỉ admin cao nhất mới đọc được những dòng sau và nhìn thấy các ô thao tác tương ứng</h4></div>
	<h3>Bạn có thể thêm, xóa quản lý tại cuối cột bên trái, quản lý có quyền chỉnh sửa, đăng xóa công việc</h3>
	<h3>Bạn có thể thêm, sửa bài viết giới thiệu trang tại cuối cột bên phải</h3>
	@endif
</div>
@stop