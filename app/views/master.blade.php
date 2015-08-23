<!-- PHÙNG BẢO CHUNG phungbaochung@gmail.com -->
<!DOCTYPE html>
<html lang="vi">
	<head>
		<title>
			@section('title')Việc làm sinh viên Đà Nẵng | Website việc làm uy tín cho sinh viên
			@show
		</title>
		<meta property="og:image:secure_url" content="https://www.vieclamsinhviendanang.com/public/img/share.jpg" />
		<meta property="og:image" content="http://www.vieclamsinhviendanang.com/public/img/share.jpg" />
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
			<!-- meta -->
@section('meta')
		<meta property="og:title" content="Tuyển dụng" />
		<meta property="og:description" content="Việc làm sinh viên Đà Nẵng" />
		<meta name="description" content="Việc làm sinh viên Đà Nẵng - Trang tìm việc làm sinh viên tuyển dụng uy tín, Tìm kiếm việc làm sinh viên nổi tiếng tại Việt Nam với rất nhiều việc làm lương cao">
        <meta name="keywords" content="tim viec, viec lam, tuyen dung, sinh viên, việc làm sinh viên,việc làm sinh viên Đà Nẵng, tuyển dụng, việc làm, tim viec,sinh viên">		
@show
		<meta name="geo.region" content="VN-DN" />
		<meta name="geo.placename" content="Đ&agrave; Nẵng" />
		<meta name="geo.position" content="16.054407;108.202167" />
		<meta name="ICBM" content="16.054407, 108.202167" />
		<meta property="og:url" content="{{URL::full()}}" />
		<meta property="og:type" content="website" />
        <meta name="robots" content="index, follow">
        <meta name="geo.region" content="VN-DN">
        <meta name="geo.placename" content="Đà Nẵng">
        <meta property="og:site_name" content="Việc làm sinh viên Đà Nẵng">
        <meta property="og:locale" itemprop="inLanguage" content="vi_VN">
        <meta property="og:description" content="@if(isset($title)){{$title}}@endif-ViecLamSinhVienDaNang.Com">
        <meta property="og:url" content="{{URL::full()}}">
		<meta property="og:site_name" content="Việc làm sinh viên Đà Nẵng"/>
		<!-- logo -->
		<link rel="shortcut icon" href="{{URL::to('/')}}/public/favicon.ico"/>
		<!-- Bootstrap CSS -->
		{{HTML::style('public/css/bootstrap.min.css')}}
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		{{HTML::style('public/css/bootstrap-theme.min.css')}}
		{{HTML::style('public/css/style.css')}}
		{{HTML::style('public/css/redactor.css')}}
    	{{HTML::style('public/css/jquery.bxslider.css')}}
		
		<!-- jQuery -->
		{{HTML::script('public/js/jquery.js')}}
		<!-- Bootstrap JavaScript -->
		{{HTML::script('public/js/bootstrap.min.js')}}
		{{HTML::script('public/js/style.js')}}
		{{HTML::script('public/js/redactor.js')}}
		{{HTML::script('public/js/jquery.bxslider.js')}}
		
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<!-- google analytics -->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-64951773-1', 'auto');
		  ga('send', 'pageview');

		</script>
	</head>
	<body>

		<!-- FACEBOOK -->
			<div id="fb-root"></div>
			<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.3&appId=457379914417296";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>

		<!-- END FACEBOOK -->



		<div class="container-fluid">
			<div class="row">
				@include('template.header')
			</div> <!-- END HEADER -->
			<div class="row"> 
			@yield('body')
			</div> <!-- END CONTENT -->
			<div class="row"> 
				@include('template.footer')
			</div> <!-- END FOOTER -->
		</div>
		@include('code')

		<!-- facebook share -->
		<div id="fb-root"></div>
			<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.3&appId=457379914417296";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>
	</body>
</html>