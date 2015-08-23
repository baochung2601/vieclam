<?php
	class Admin extends BaseController
	{
		public function index(){
			return View::make('admin.index');
		}

		public function post_all(){
			$data['post'] = Post::orderBy('id', 'desc')->paginate(11);
			$data['phan_loai'] = '.phan-loai-0';
			return View::make('admin.content',$data);
		}

		public function post_loai($loai){
			$data['post'] = Post::where('loai',$loai)->orderBy('id','desc')->paginate(11);
			$data['phan_loai'] = '.phan-loai-'.$loai;
			return View::make('admin.content',$data);
		}

		public function post_public(){
			$id = Input::get('id');
			$url = Input::get('url');
			$post = Post::find($id);
			if (count($post) == 1) {
				$page = new Page;
				$page->title = $post->title;
				$page->loai = $post->loai;
				$page->phanloai = $post->phanloai;
				$page->mota = $post->mota;
				$page->noidung = $post->noidung;
				$page->mucluong = $post->mucluong;
				$page->soluong = $post->soluong;
				$page->lienhe = $post->lienhe;
				$page->time = $post->time;
				$page->thoigian = $post->thoigian;
				$page->user_id = $post->user_id;
				$page->save();
				$post->delete();
				return Redirect::to($url)->with('success','Đăng tin thành công!!!!!');
			}else{
				return Redirect::to($url);
			}
		}

		public function post_delete(){
			$id = Input::get('id');
			$url = Input::get('url');
			$post = Post::find($id);
			$post->delete();
			return Redirect::to($url)->with('success','Xóa tin thành công!!!!!');
		}

		public function post_view($id, $loai){
			$data['user'] = Post::find($id)->user()->get()->first();
			$data['post'] = Post::find($id);
			$data['phan_loai'] = '.phan-loai-'.$loai;
			return View::make('admin.view_post',$data);
		}

		public function post_edit($id){
			$data['post'] = Post::find($id);
			$data['phan_loai'] = '.phan-loai-'.$data['post']->loai;
			return View::make('admin.edit_post',$data);
		}

		public function post_update(){
			$post = Post::find(Input::get('id'));
			$post->title = Input::get('title');
			$post->mota = Input::get('mota');
			$post->noidung = Input::get('noidung');
			$post->mucluong = Input::get('mucluong');
			$post->soluong = Input::get('soluong');
			$post->lienhe = Input::get('lienhe');
			$post->save();
			return Redirect::to(Input::get('url'))->with('success','Cập nhập thành công');
		}

		public function page_tatca(){
			$data['post'] = Page::orderBy('id', 'desc')->paginate(11);
			$data['loai'] = 0;
			return View::make('admin.content_page',$data);
		}

		public function page_loai($loai){
			$data['post'] = Page::where('loai',$loai)->orderBy('id','desc')->paginate(11);
			$data['loai'] = $loai;
			return View::make('admin.content_page',$data);
		}

		public function page_delete(){
			$id = Input::get('id');
			$url = Input::get('url');
			$post = Page::find($id);
			$post->delete();
			return Redirect::to($url)->with('success','Xóa tin thành công!!!!!');
		}

		public function page_view($id, $loai){
			$data['page'] = Page::find($id);
			$data['user'] = Page::find($id)->user()->get()->first();
			$data['loai'] = $loai;
			return View::make('admin.view_page',$data);
		}

		public function page_edit($id){
			$data['page'] = Page::find($id);
			$data['loai'] = $data['page']->loai;
			return View::make('admin.edit_page',$data);
		}

		public function page_update(){
			$page = Page::find(Input::get('id'));
			$page->title = Input::get('title');
			$page->mota = Input::get('mota');
			$page->noidung = Input::get('noidung');
			$page->mucluong = Input::get('mucluong');
			$page->soluong = Input::get('soluong');
			$page->lienhe = Input::get('lienhe');
			$page->save();
			return Redirect::to(Input::get('url'))->with('success','Cập nhập thành công');
		}

		public function gioithieu(){
			$data['vechungtoi'] = Gioithieu::find(1);
			$data['lienhe'] = Gioithieu::find(2);
			$data['quydinh'] = Gioithieu::find(3);
			$data['loai'] = 12;
			return View::make('admin.gioithieu',$data);
		}

		public function post_gioithieu(){
			$gioithieu = Gioithieu::find(Input::get('id'));
			$gioithieu->content = Input::get('content');
			$gioithieu->save();
			return Redirect::route('gioithieu')->with('success','Cập nhật thành công');
		}

		public function adm_dang_tin(){
			$data['loai'] = 11;
			return View::make('admin.dangtin',$data);
		}

		public function post_adm_dangtin(){
			$data = Input::all();
			$valid = Validator::make($data, User::$admin_post_rules, User::$user_post_language);
			if ($valid->passes()) {
				$page = New Page;
				$page->title = Input::get('title');
				$page->loai = Input::get('loai');
				$page->phanloai = Input::get('phanloai');
				$page->mota = Input::get('mota');
				$page->noidung = Input::get('noidung');
				$page->mucluong = Input::get('mucluong');
				$page->soluong = Input::get('soluong');
				$page->lienhe = Input::get('lienhe');
				$page->thoigian = date('d-m-Y');
				$page->user_id = Auth::user()->id;
				$page->save();
				return Redirect::route('adm_dang_tin')->with('success_top','Đăng tin thành công');
			}else{
				return Redirect::route('adm_dang_tin')->withInput()->with('adm_post_error',$valid->errors()->first());
			}
		}

		public function get_add_ql(){
			$data['phan_loai'] = '.phan-loai-11';
			return View::make('admin.add_quanly',$data);
		}

		public function post_add_ql(){
			$data = Input::all();
			$valid = Validator::make($data, User::$adm_add_rules, User::$language);
			if ($valid->passes()) {
				$user = new User;
				$user->username = Input::get('username');
				$user->password = Hash::make(Input::get('password'));
				$user->email = Input::get('email');
				$user->hienthi = Input::get('username');
				$user->level = 2;
				$user->save();
				return Redirect::to(Input::get('url'))->with('success','Tạo tài khoản thành công');
			}else{
				return Redirect::to(Input::get('url'))->withInput()->with('error',$valid->errors()->first());
			}
		}

		public function view_ql(){
			$data['phan_loai'] = '.phan-loai-12';
			$data['quanly'] = User::where('level',2)->get();
			return View::make('admin.view_quanly',$data);
		}
		public function delete_ql(){
			$user = User::find(Input::get('id'));
			$user->delete();
			return Redirect::to(Input::get('url'))->with('success','Xóa bỏ tài khoản thành công');
		}

		public function get_slider_top(){
			$data['slider_top'] = Slidertop::all();
			$data['phan_loai'] = '.phan-loai-13';
			return View::make('admin.slider_top',$data);
		}
		public function post_slider_top(){
			$data = Input::all();
			$valid = Validator::make($data, Slidertop::$silider_top_rules, Slidertop::$slider_top_languge);
			if ($valid->passes()) {
				$img = $data['img']->move('public/img/slider_top',$data['img']->getClientOriginalName());
				if ($img) {
					$slider_top = new Slidertop;
					$slider_top->url_img = 'public/img/slider_top/'.$data['img']->getClientOriginalName();
					$slider_top->alt_img = Input::get('alt');
					$slider_top->link = Input::get('url');
					$slider_top->save();
					return Redirect::to(Input::get('url_full'))->with('success','Thêm slider-top thành công');
				}else{
					return Redirect::to(Input::get('url_full'))->with('error','Sảy ra lỗi vui lòng thử lại');
				}
			}else{
				return Redirect::to(Input::get('url_full'))->with('error',$valid->errors()->first());
			}
		}

		public function delete_slider_top(){
			$slider_top = Slidertop::find(Input::get('id'));
			$slider_top -> delete();
			File::delete(Input::get('img'));
			return Redirect::to(Input::get('url_full'))->with('delete_success','Xóa slider-top thành công');
		}

		public function get_delete_user(){
			$data['loai'] = 13;
			$data['user'] = User::where('level','1')->paginate(20);
			return View::make('admin.view_user',$data);
		}

		public function post_delete_user(){
			$user = User::find(Input::get('id'));
			$user->delete();
			$post = Post::where('user_id',Input::get('id'));
			$post->delete();
			$page = Page::where('user_id',Input::get('id'));
			$page->delete();
			return Redirect::to(Input::get('url_full'))->with('delete_user','Xóa tài khoản thành công');
		}

		public function get_slider_bottom(){
			$data['slider_bottom'] = Sliderbottom::all();
			$data['phan_loai'] = '.phan-loai-14';
			return View::make('admin.slider_bottom',$data);
		}

		public function post_slider_bottom(){
			$data = Input::all();
			$valid = Validator::make($data, Slidertop::$silider_top_rules, Slidertop::$slider_top_languge);
			if ($valid->passes()) {
				$img = $data['img']->move('public/img/slider_bottom',$data['img']->getClientOriginalName());
				if ($img) {
					$slider_top = new Sliderbottom;
					$slider_top->url_img = 'public/img/slider_bottom/'.$data['img']->getClientOriginalName();
					$slider_top->alt_img = Input::get('alt');
					$slider_top->link = Input::get('url');
					$slider_top->save();
					return Redirect::to(Input::get('url_full'))->with('success','Thêm slider-bottom thành công');
				}else{
					return Redirect::to(Input::get('url_full'))->with('error','Sảy ra lỗi vui lòng thử lại');
				}
			}else{
				return Redirect::to(Input::get('url_full'))->with('error',$valid->errors()->first());
			}
		}

		public function delete_slider_bottom(){
			$slider_top = Sliderbottom::find(Input::get('id'));
			$slider_top -> delete();
			File::delete(Input::get('img'));
			return Redirect::to(Input::get('url_full'))->with('delete_success','Xóa slider-top thành công');
		}

		public function add_tintuc(){
			$data['loai'] = 14;
			return View::make('admin.add_tintuc',$data);
		}

		public function post_add_tintuc(){
			$data = Input::all();
			$valid = Validator::make($data, Tintuc::$add_tintuc_rules, Tintuc::$add_tintuc_language);
			if ($valid->passes()) {
				$img = $data['img']->move('public/img/news',$data['img']->getClientOriginalName());
				if ($img) {
					$tintuc = new Tintuc;
					$tintuc->img = 'public/img/news/'.$data['img']->getClientOriginalName();
					$tintuc->title = Input::get('title');
					$tintuc->mota = Input::get('mota');
					$tintuc->noidung = Input::get('noidung');
					$tintuc->user = Auth::user()->username;
					$tintuc->thoigian = date('d-m-Y');
					$tintuc->save();
					return Redirect::to(Input::get('url'))->with('tintuc_success','Đăng tin thành công');
				}else{
					return Redirect::to(Input::get('url'))->with('tintuc_success','Đăng tin thành công');
				}
				
			}else{
				return Redirect::to(Input::get('url'))->withInput()->with('tintuc_error',$valid->errors()->first());
			}
		}

		public function quanly_tintuc(){
			$data['tintuc'] = Tintuc::orderby('id','desc')->paginate(5);
			$data['loai'] = 15;
			return View::make('admin.view_tintuc',$data);
		}

		public function delete_tintuc(){
			$tintuc = Tintuc::find(Input::get('id'));
			File::delete(Input::get('img'));
			$tintuc->delete();
			return Redirect::to(Input::get('url'))->with('tintuc_success','Xóa tin thành công');
		}

		public function edit_tintuc($id){
			$data['tintuc'] = Tintuc::find($id);
			return View::make('admin.edit_tintuc',$data);
		}

		public function post_edit_tintuc(){
			$data = Input::all();
			$valid = Validator::make($data, Tintuc::$edit_tintuc_rules, Tintuc::$add_tintuc_language);
			if ($valid->passes()) {
				$tintuc = Tintuc::find(Input::get('id'));
				$tintuc->title = Input::get('title');
				$tintuc->mota = Input::get('mota');
				$tintuc->noidung = Input::get('noidung');
				$tintuc->save();
				return Redirect::to(Input::get('url'))->with('tintuc_success','Sửa tin thành công');
			}else{
				return Redirect::to(Input::get('url'))->with('tintuc_error',$valid->errors()->first());
			}
		}


	}
?>