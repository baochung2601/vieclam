<div class="col-md-12 header">
	<div class="col-md-3 col-sm3 col-xs-12 header-left">
		<a href="{{URL::route('home')}}"><img src="{{URL::to('public/img/vlsv.png')}}" alt="logo" class="img-responsive"></a>
	</div>
	<div class="col-md-6 col-sm6 col-xs-12 header-center">
			<div class="search">
				<form class="searchform" method="get" action="http://www.google.com/cse" target="_blank">
			        <input type="hidden" name="cx" value="016670041520223764917:bx3izx_uuus">
			        <input type="text" name="q" placeholder="Nhập nội dung tìm kiếm"/>
			        <input type="hidden" name="ie" value="UTF-8" />
			        <button type="submit" class="btn btn-link">
          			<span class="glyphicon glyphicon-search"></span>
        			</button>
    			</form>
			</div>
	</div>
	<div class="col-md-3 col-sm3 col-xs-12 header-right">
		@if(!Auth::check())
			<ul>
			<li><a href="#" data-toggle="modal" data-target="#myModal">Đăng nhập</a></li>
			<li>|</li>
			<li><a href="#" data-toggle="modal" data-target="#myModaldk" class="dangki">Đăng kí</a></li>
			</ul>
			<a href="#" data-toggle="modal" data-target="#myModaldk" class="quenmk">Quên mật khẩu?</a>
			@include('modal')
		@else
			<div class="user">
			Chào bạn <a href="{{URL::route('profile')}}">{{Auth::user()->username}}</a>
			@if(Auth::user()->level > 1)
				<a href="{{URL::route('admin')}}">(Admin)</a>
			@endif
			<br/>(<a href="{{URL::route('dang_xuat')}}">Đăng xuất</a>)
			</div>
		@endif
	</div>
	
</div>