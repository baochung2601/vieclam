<script>
	$(document).ready(function(){
		$('.header a[class="quenmk"]').click(function(){
			$('.bc-modal-dk form').attr('action','{{URL::to("quen-mat-khau")}}');
			$('.bc-modal-dk .modal-title').html('Quên mật khẩu');
			$('.bc-modal-dk .modal-title').css('margin-left', '10px');
			$('.bc-modal-dk form .bc-dangki').empty();
			$('.bc-modal-dk form input[type="submit"]').attr('value','Lấy lại mật khẩu');
			$('.bc-modal-dk form div .bc-dangki').css('margin-top','10px');
		});
		$('.header a[class="dangki"]').click(function(){
			$('.bc-modal-dk form').attr('action','{{URL::to("dang-ki")}}');
			$('.bc-modal-dk .modal-title').html('Đăng kí');
			var form = "<input placeholder='Mật khẩu' class='password' name='password' type='password'><input placeholder='Nhập lại mật khẩu' class='password' name='re_password' type='password'><input placeholder='email' class='email' name='email' type='email'>";
			$('.bc-modal-dk form div .bc-dangki').html(form);
			$('.bc-modal-dk form input[type="submit"]').attr('value','Đăng kí');
		});

		$('.user-update div.user-info textarea#user-info').redactor({
			focus:true,
			/*imageUpload:"{{URL::to('/')}}/user-info-img"*/
		});

		$('.content .form-dangtin form #noidung').redactor({
			focus:true,
		});

		// $('.content .form-dangtin form #mota').redactor({
		// 	focus:true,
		// });

		$('.adm-gioithieu .textarea').redactor({
			focus:true,
		});

		// $('.content .edit-post textarea[name="mota"]').redactor({
		// 	focus:true,
		// });
		$('.content .edit-post textarea[name="noidung"]').redactor({
			focus:true,
		});
		$('#add-tintuc').redactor({
			focus:true,
		});
		$('#edit-tintuc').redactor({
			focus:true,
		});

        $('.bxslider').bxSlider({
            minSlides: 6,
            maxSlides: 6,
            slideWidth: 2015,
            slideMargin: 60,
            ticker: true,
            speed: 100000
        });
	})
</script>
<?php
	if(isset($phan_loai)){
		echo '<script>$(document).ready(function(){$("'.$phan_loai.'").addClass("active");})</script>';
	}

	if(isset($loai)){
		echo '<script>$(document).ready(function(){$(".loai-'.$loai.'").addClass("active");})</script>';
	}
?>
	@if(Session::has('success_top'))
	<script type="text/javascript">
	$(document).ready(function(){
		alert('{{Session::get('success_top')}}');
	});
	</script>
	@endif
	@if(Session::has('error_top'))
	<script type="text/javascript">
	$(document).ready(function(){
		alert('{{Session::get('error_top')}}');
	});
	</script>
	@endif