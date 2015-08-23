 <!-- Modal đăng nhập-->
  <div class="modal fade bc-modal-dn" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Đăng nhập</h4>
        </div>
        {{Form::open(array('url'=>'dang-nhap'))}}
        <div class="modal-body">
          {{form::text('username','',array('placeholder'=>'Tên đăng nhập','class'=>'username'))}}
	        {{Form::password('password',array('placeholder'=>'Mật khẩu','class'=>'password'))}}
          {{Form::checkbox('cookie')}} Giữ tôi luôn đăng nhặp
	        {{Form::submit('Đăng nhập',array('class'=>"btn btn-default submit"))}}
        </div>
        {{Form::close()}}
      </div>
    </div>
  </div>

 <!-- Modal đăng kí, quên mk-->
  <div class="modal fade bc-modal-dk" id="myModaldk" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Đăng kí</h4>
        </div>
        {{Form::open(array('url'=>'dang-ki'))}}
        <div class="modal-body">
          {{Form::text('username','',array('placeholder'=>'Tên đăng nhập','class'=>'username'))}}
          <div class="bc-dangki">
          {{Form::password('password',array('placeholder'=>'Mật khẩu','class'=>'password'))}}
          {{Form::password('re_password',array('placeholder'=>'Nhập lại mật khẩu','class'=>'password'))}}
          {{Form::email('email','',array('placeholder'=>'email','class'=>'email'))}}
          </div>
          {{Form::captcha()}}
          {{Form::submit('Đăng kí',array('class'=>"btn btn-default submit"))}}
        </div>
        {{Form::close()}}
      </div>
    </div>
  </div>