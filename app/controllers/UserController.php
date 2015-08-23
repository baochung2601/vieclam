<?php
	class UserController extends BaseController
	{

		public function post_register(){
			$data=Input::all();
			$valid = Validator::make($data, User::$register_rules, User::$language);
			if ($valid->passes()) {
				$user = new User;
				$user->username = Input::get('username');
				$user->password = Hash::make(Input::get('password'));
				$user->email = Input::get('email');
				$user->hienthi = Input::get('username');
				$user->save();
				return Redirect::to(Session::get('url'))->with('success_top','Đăng kí thành công');
			}else{
				return Redirect::to(Session::get('url'))->withInput()->with('error_top',$valid->errors()->first());
				
			}
		}

		public function post_login(){
			$data=Input::all();
			$valid = Validator::make($data, User::$login_rules, User::$language);
			if ($valid->passes()) {
				$data = array(
						'username'=> Input::get('username'),
						'password'=> Input::get('password'),
					);
				if (Input::has('cookie')) {
					$remember = true;
				}else{
					$remember = false;
				}
				if (Auth::attempt($data,$remember)) {
					return Redirect::to(Session::get('url'))->with('success_top','Đăng nhập thành công');
				}else{
					return Redirect::to(Session::get('url'))->withInput()->with('error_top','Sai tên đăng nhập hoặc mật khẩu');
				}
			}else{
				return Redirect::to(Session::get('url'))->withInput()->with('error_top',$valid->errors()->first());
			}
		}

		public function get_logout(){
			Auth::logout();
			$cookie_forget = Cookie::forget('username');
			return Redirect::to(Session::get('url'))->with('success_top','Bạn đã đăng xuất')->withCookie($cookie_forget);
		}

		public function post_quenmk(){
			$data = Input::all();
			$valid = Validator::make($data, User::$quenmk_rules, User::$language);
			if ($valid->passes()) {
				$code =String::random(50);
				$user = User::where('username',Input::get('username'))->get()->first();
				if ($user == false) {
					return Redirect::to(Session::get('url'))->withInput()->with('error_top','Tài khoản không tồn tại');
				}else{
					$mail = array(
							'username' => $user->username,
							'code' => $code,
							'usermail'=>$user->email,
						);
					$user->code = $code;
					$user->save();
					Mail::send('user.mail',$mail, function($mess) use ($mail){
						$mess->from('support@vieclamsinhviendanang.com','Việc làm sinh viên Đà Nẵng');
						$mess->to($mail['usermail'],$mail['username']);
						$mess->subject('Yêu cầu khôi phục mật khẩu');
					});
					return Redirect::to(Session::get('url'))->with('success_top','Vui lòng kiểm tra email và hoàn tất');
				}
			}else{
				return Redirect::to(Session::get('url'))->withInput()->with('error_top',$valid->errors()->first());
			}
		}

		public function profile(){
			$data['title'] = 'Thông tin tài khoản';
			return View::make('user.profile',$data);
		}

		public function post_user_update(){
			$data = Input::all();
			$valid = Validator::make($data, User::$user_update_rules, User::$language);
			if ($valid->passes()) {
				if (empty($data['img'])) {
						$user = User::find(Auth::user()->id);
						$user->hienthi = Input::get('hienthi');
						$user->info = Input::get('info');
						$user->save();
						return Redirect::route('profile')->with('success','Cập nhật thông tin thành công');				
				}else{
					$user_img = $data['img']->move('public/img/user',$data['img']->getClientOriginalName());
					if ($user_img) {
						File::delete(Input::get('old_img'));
						$img = 'public/img/user/'.$data['img']->getClientOriginalName();
						$user = User::find(Auth::user()->id);
						$user->hienthi = Input::get('hienthi');
						$user->info = Input::get('info');
						$user->img = $img;
						$user->save();
						return Redirect::route('profile')->with('success','Cập nhật thông tin thành công');
					}else{
						return Redirect::route('profile')->with('error','Có lỗi xảy ra vui lòng kiểm tra lại');
					}
				}
			}else{
				return Redirect::route('profile')->withErrors($valid);
			}
		}

		public function get_change_password(){
			$data['title'] = 'Thay đổi mật khẩu';
			return View::make('user.change_pass',$data);
		}

		public function post_change_password(){
			$data = Input::all();
			$valid = Validator::make($data, User::$change_pass_rules, User::$language);
			if ($valid->passes()) {
				$user = User::find(Auth::user()->id);
				$user->password = Hash::make(Input::get('new_password'));
				$user->save();
				return Redirect::route('profile')->with('success','Thay đổi mật khẩu thành công');
			}else{
				return Redirect::route('chang_pass')->with('change_pass_error',$valid->errors()->first());
			}
		}

/*		public function user_info_img(){
			$data = Input::all();
			$valid = Validator::make($data, User::$user_info_img_rules);
			if ($valid->passes()) {
				$img = $data['file'];
				$img->move('public/img/user-info',$img->getClientOriginalName());
				$url = URL::to('/')."/public/img/user-info/".$img->getClientOriginalName();
				return Response::json(array('filelink'=>$url));
			}else{
				false;
			}
		}*/

		public function reset_pass($username, $code){
			$user = User::where('username',$username)->get();
			if (Count($user) == 1) {
				$user = $user->first();
				if ($user->code == $code && $code != '') {
					return View::make('user.password_restore')->with('username',$username);
				}else{
					return Redirect::route('home')->with('error_top','Vui lòng kiểm tra lại liên kết trong email');
				}
			}else{
				return Redirect::route('home')->with('error_top','Vui lòng kiểm tra lại liên kết trong email');
			}
		}

		public function password_restore(){
			$data = Input::all();
			$valid = Validator::make($data, User::$password_restore_rules, User::$language);
			if ($valid->passes()) {
				$user = User::where('username', Input::get('username'))->get()->first();
				$user->password = Hash::make(Input::get('password'));
				$user->code = '';
				$user->save();
				return Redirect::route('home')->with('success_top','Thay đổi mật khẩu thành công bạn có thể đăng nhập');
			}else{
				return Redirect::to(Input::get('url'))->with('error',$valid->errors()->first());
			}
		}

		public function get_dangtin(){
			$data['loai'] = 11;
			$data['title'] = 'Đăng tin tuyển dụng';
			return View::make('user.form',$data);
		}

		public function post_dangtin(){
			$data = Input::all();
			$valid = Validator::make($data, User::$user_post_rules, User::$user_post_language);
			if ($valid->passes()) {
				$post = New Post;
				$post->title = Input::get('title');
				$post->loai = Input::get('loai');
				$post->phanloai = Input::get('phanloai');
				$post->mota = Input::get('mota');
				$post->noidung = Input::get('noidung');
				$post->mucluong = Input::get('mucluong');
				$post->soluong = Input::get('soluong');
				$post->lienhe = Input::get('lienhe');
				$post->thoigian = date('d-m-Y');
				$post->user_id = Auth::user()->id;
				$post->save();
				return Redirect::route('home')->with('success_top','Đăng tin thành công, vui lòng chờ kiểm duyệt');
			}else{
				return Redirect::route('get_dangtin')->withInput()->with('user_post_error',$valid->errors()->first());
			}
		}
	}
?>