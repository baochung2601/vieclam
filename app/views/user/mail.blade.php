<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Yêu cầu khôi phục mật khẩu</title>

		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<h1 class="text-center">Yêu cầu khôi phục mật khẩu</h1>
		Chào bạn {{$username}} bạn vừa yêu cầu khôi phục mật khẩu tại website <a href="vieclamsinhviendanang.com">vieclamsinhviendanang.com</a>.<br/>
		Để khôi phục mật khẩu bạn vui lòng click vào <a href="{{URL::route("reset_pass",array($username, $code))}}">liên kết này</a> và làm theo hướng dẫn.<br/>
		Vui lòng không trả lời email này,cảm ơn!
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	</body>
</html>