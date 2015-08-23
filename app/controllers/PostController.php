<?php
	/**
	* 
	*/
	class PostController extends BaseController
	{
		
		public function tat_ca(){
			$data['post'] = Page::orderBy('id', 'desc')->paginate(11);
			$data['loai'] = 0;
			$data['title'] = 'Tất cả việc làm | Website viec lam sinh vien uy tin hang dau Viet Nam';
			return View::make('template.content',$data);
		}

		public function chi_tiet($id, $title){
			$ip = Request::getClientIp();
			if (Cache::has($ip.'_viewpost_'.$id)) {
				$data['post'] = Cache::get($ip.'_viewpost_'.$id);
				$data['loai'] = $data['post']->loai;
				$data['title'] = $data['post']->title;
				$data['user'] = Cache::get($ip.'_user_'.$id);
			}else{
				$post = Page::find($id);
				$post->view = $post->view + 1;
				$post->save();
				$data['post'] = Cache::remember($ip.'_viewpost_'.$id,15,function() use ($id){
									return Page::find($id);
								});
				$data['loai'] = $data['post']->loai;
				$data['title'] = $data['post']->title;
				$data['user'] = Cache::remember($ip.'_user_'.$id,15,function() use ($id){
								return Page::find($id)->user()->get()->first();
							});
			}
			return View::make('template.view_post',$data);
		}

		public function view_user($id, $username){
			$data['user'] = User::find($id);
			return View::make('template.view_user',$data);

		}

		public function tim_viec($id, $title){
			$data['post'] = Page::where('loai',$id)->orderBy('id','desc')->paginate(11);
			$data['loai'] = $id;
			if($id == 1){
				$data['title'] = 'Gia sư sinh viên | Website viec lam sinh vien uy tin tai da nang';
			}elseif($id == 2){
				$data['title'] = 'Nhân viên bán hàng | Website viec lam sinh vien uy tin tai da nang';
			}elseif($id == 3){
				$data['title'] = 'Tuyển nhân viên phát tờ rơi bảo vệ giữ xe - Việc làm Đà Nẵng';
			}elseif($id == 4){
				$data['title'] = 'Việc làm nhà hàng, cafe, tiệc cưới dành cho sinh viên tại Đà Nẵng';
			}elseif($id == 5){
				$data['title'] = 'PG-PB, Tiếp thị, Khảo sát thị trường | Website viec lam uy tin so 1';
			}elseif($id == 6){
				$data['title'] = 'Giúp việc nhà, trông coi cửa hàng| Website viec lam sinh vien uy tin';
			}elseif($id == 7){
				$data['title'] = 'Việc làm sinh viên thực tập | Website viec lam uy tin tai Da Nang';
			}elseif($id == 8){
				$data['title'] = 'Việc làm cộng tác viên | Website viec lam sinh vien uy tin tai Da Nang';
			}elseif($id == 9){
				$data['title'] = 'Việc làm freelancer | Website viec lam sinh vien uy tin tai Da Nang';
			}else{
				$data['title'] = 'Việc làm đa cấp | Website viec lam sinh vien so 1 tai Da Nang';
			};
			return View::make('template.content',$data);
		}

		public function tim_viec_danh_muc($id, $phanloai, $title){
			$data['post'] = Page::where('loai',$id)->where('phanloai',$phanloai)->orderBy('id', 'desc')->paginate(11);
			$data['loai'] = $id;
			$data['phan_loai'] = '.phan-loai-'.$phanloai;
			if($id == 1){
				$data['title'] = 'Gia sư sinh viên | Website viec lam sinh vien uy tin tai da nang';
			}elseif($id == 2){
				$data['title'] = 'Nhân viên bán hàng | Website viec lam sinh vien uy tin tai da nang';
			}elseif($id == 3){
				$data['title'] = 'Việc làm phát tờ rơi, giữ xe, bảo vệ dành cho sinh viên tại Đà Nẵng';
			}elseif($id == 4){
				$data['title'] = 'Việc làm nhà hàng, cafe, tiệc cưới dành cho sinh viên tại Đà Nẵng';
			}elseif($id == 5){
				$data['title'] = 'PG-PB, Tiếp thị, Khảo sát thị trường | Website viec lam uy tin so 1';
			}elseif($id == 6){
				$data['title'] = 'Giúp việc nhà, trông coi cửa hàng| Website viec lam sinh vien uy tin';
			}elseif($id == 7){
				$data['title'] = 'Việc làm sinh viên thực tập | Website viec lam uy tin tai Da Nang';
			}elseif($id == 8){
				$data['title'] = 'Việc làm cộng tác viên | Website viec lam sinh vien uy tin tai Da Nang';
			}elseif($id == 9){
				$data['title'] = 'Việc làm freelancer | Website viec lam sinh vien uy tin tai Da Nang';
			}else{
				$data['title'] = 'Việc làm đa cấp | Website viec lam sinh vien so 1 tai Da Nang';
			};
			return View::make('template.content',$data);
		}

		public function user_post(){
			$data['post'] = User::find(Auth::user()->id)->page()->orderby('id','desc')->paginate(11);
			$data['title'] = 'Tuyển dụng của tôi';
			return View::make('user.user_post',$data);
		}
	}
?>