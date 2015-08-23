<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::group(array('before'=>'url'), function(){
	Route::get('/',array('as'=>'home','uses'=>'HomeController@showWelcome'));
	Route::get('ve-chung-toi.html',array('as'=>'vechungtoi','uses'=>'GioithieuController@vechungtoi'));
	Route::get('lien-he.html',array('as'=>'lienhe','uses'=>'GioithieuController@lienhe'));
	Route::get('quy-dinh.html',array('as'=>'quydinh','uses'=>'GioithieuController@quydinh'));

	Route::get('tat-ca-viec-lam.html',array('as'=>'tat_ca','uses'=>'PostController@tat_ca'));
	Route::get('chi-tiet-{id}/{title}.html',array('as'=>'chi_tiet','uses'=>'PostController@chi_tiet'))->where('id','[0-9]+')/*->where('title','[a-zA-Z\-\:]+')*/;
	Route::get('thanh-vien-{id}/{username}.html',array('as'=>'view_user','uses'=>'PostController@view_user'))->where('id','[0-9]+')->where('username','[a-zA-Z0-9]+');
	Route::get('tim-viec-{id}/{title}.html',array('as'=>'tim_viec','uses'=>'PostController@tim_viec'))->where('id','[0-9]+')->where('title','[a-zA-Z\-]+');
	Route::get('viec-lam-{id}-{phanloai}/{title}.html',array('as'=>'danh_muc','uses'=>'PostController@tim_viec_danh_muc'))->where('id','[0-9]+')->where('phanloai','[0-9]+')->where('title','[a-zA-Z\-]+');
	Route::get('tat-ca-viec-lam.html',array('as'=>'tat_ca','uses'=>'PostController@tat_ca'));
	Route::get('tin-viec-lam.html',array('as'=>'tintuc','uses'=>'TintucController@list_tintuc'));
	Route::get('tin-tuc-{id}/{title}.html',array('as'=>'view_tintuc','uses'=>'TintucController@view_tintuc'))->where('id','[0-9]+');
	
});

Route::post('dang-ki',array('before'=>'guest|csrf','uses'=>'UserController@post_register'));

Route::post('dang-nhap',array('before'=>'guest|csrf','uses'=>'UserController@post_login'));

Route::get('dang-xuat',array('as'=>'dang_xuat','before'=>'auth','uses'=>'UserController@get_logout'));

Route::post('quen-mat-khau',array('before'=>'guest|csrf','uses'=>'UserController@post_quenmk'));
Route::post('password-restore',array('as'=>'password_restore' ,'uses'=>'UserController@password_restore'));
Route::get('khoi-phuc-mat-khau/{username}/{code}',array('as'=>'reset_pass','before'=>'guest', 'uses'=>'UserController@reset_pass'))->where('username','[a-zA-Z0-9]+')->where('code','[a-zA-Z0-9]+');

Route::get('thong-tin-tai-khoan.html', array('as'=>'profile','before'=>'auth','uses'=>'UserController@profile'));
Route::post('user-update',array('as'=>'user_update','before'=>'auth|csrf','uses'=>'UserController@post_user_update'));

Route::get('doi-mat-khau.html',array('as'=>'get_change_password','before'=>'auth','uses'=>'UserController@get_change_password'));
Route::post('doi-mat-khau',array('as'=>'chang_pass','before'=>'auth|csrf','uses'=>'UserController@post_change_password'));

// xem tuyen dung da dang cua tai khoan
	Route::get('tuyen-dung-cua-toi.html',array('as'=>'user_post','uses'=>'PostController@user_post'));

/*Route::post('user-info-img',array('before'=>'auth','uses'=>'UserController@user_info_img'));*///upload hình redactor user info

Route::get('dang-tin.html',array('as'=>'get_dangtin','before'=>'auth','uses'=>'UserController@get_dangtin'));//dang tin
Route::post('dang-tin',array('as'=>'post_dangtin','before'=>'auth|csrf', 'uses'=>'UserController@post_dangtin'));

Route::group(array('prefix'=>'admin','before'=>'auth|check-admin'), function(){
	Route::get('admin',array('as'=>'admin','uses'=>'Admin@index'));

// su ly tin chua dang
	Route::get('post/tat-ca-viec-lam',array('as'=>'admin_post_tatca','uses'=>'Admin@post_all'));
	Route::get('post/{loai}',array('as'=>'admin_post_loai','uses'=>'Admin@post_loai'));
	Route::post('post-public',array('as'=>'post_public','uses'=>'Admin@post_public'));
	Route::post('post-delete',array('as'=>'post_delete','uses'=>'Admin@post_delete'));
	Route::get('post-view/{id}/{loai}',array('as'=>'admin_post_view','uses'=>'Admin@post_view'));
	Route::get('post-edit/{id}',array('as'=>'admin_post_edit','uses'=>'Admin@post_edit'));
	Route::post('post-update',array('as'=>'admin_post_update','uses'=>'Admin@post_update'));

// su ly tin da dang
	Route::get('page/tat-ca-viec-lam',array('as'=>'admin_page_tatca','uses'=>'Admin@page_tatca'));
	Route::get('page/{loai}',array('as'=>'admin_page_loai','uses'=>'Admin@page_loai'));
	Route::post('page-delete',array('as'=>'page_delete','uses'=>'Admin@page_delete'));
	Route::get('page-view/{id}/{loai}',array('as'=>'admin_page_view','uses'=>'Admin@page_view'));
	Route::get('page-edit/{id}',array('as'=>'admin_page_edit','uses'=>'Admin@page_edit'));
	Route::post('page-update',array('as'=>'admin_page_update','uses'=>'Admin@page_update'));

// sua thong tin trang
	Route::get('gioithieu',array('as'=>'gioithieu','uses'=>'Admin@gioithieu'));
	Route::post('post-gioi-thieu',array('as'=>'post_gioithieu','uses'=>'Admin@post_gioithieu'));

// adm dang tin
	Route::get('adm-dang-tin',array('as'=>'adm_dang_tin','uses'=>'Admin@adm_dang_tin'));
	Route::post('adm-dang-tin',array('as'=>'post_adm_dangtin','uses'=>'Admin@post_adm_dangtin'));

// them quan ly
	Route::get('get-add-ql',array('as'=>'get_add_ql','before'=>'check-lv','uses'=>'Admin@get_add_ql'));
	Route::post('post-add-ql',array('as'=>'post_add_ql','before'=>'check-lv','uses'=>'Admin@post_add_ql'));

// xoa quan ly
	Route::get('view-ql',array('as'=>'view_ql','before'=>'check-lv','uses'=>'Admin@view_ql'));
	Route::post('delete-ql',array('as'=>'delete_ql','before'=>'check-lv','uses'=>'Admin@delete_ql'));

// slider-top
	Route::get('slider-top',array('as'=>'slider_top','uses'=>'Admin@get_slider_top'));
	Route::post('slider-top',array('as'=>'post_slider_top','uses'=>'Admin@post_slider_top'));
	Route::post('delete-slide-top',array('as'=>'delete_slider_top','uses'=>'Admin@delete_slider_top'));

// slider-top
	Route::get('slider-bottom',array('as'=>'slider_bottom','uses'=>'Admin@get_slider_bottom'));
	Route::post('slider-bottom',array('as'=>'post_slider_bottom','uses'=>'Admin@post_slider_bottom'));
	Route::post('delete-slide-bottom',array('as'=>'delete_slider_bottom','uses'=>'Admin@delete_slider_bottom'));

// xóa tài khoản
	Route::get('xoa-tai-khoan',array('as'=>'xoa_tai_khoan','before'=>'check-lv','uses'=>'Admin@get_delete_user'));
	Route::post('xoa-tai-khoan',array('as'=>'post_delete_user','before'=>'check-lv','uses'=>'Admin@post_delete_user'));

// quản lý tin tức
	Route::get('add-tintuc',array('as'=>'add_tintuc','uses'=>'Admin@add_tintuc'));
	Route::post('add-tintuc',array('as'=>'post_add_tintuc','uses'=>'Admin@post_add_tintuc'));
	Route::get('quanly-tintuc',array('as'=>'quanly_tintuc','uses'=>'Admin@quanly_tintuc'));
	Route::get('edit-tintuc/{id}',array('as'=>'edit_tintuc','uses'=>'Admin@edit_tintuc'));
	Route::post('edit-tintuc',array('as'=>'post_edit_tintuc','uses'=>'Admin@post_edit_tintuc'));
	Route::post('delete-tintuc',array('as'=>'delete_tintuc','uses'=>'Admin@delete_tintuc'));

// cache clear
	Route::get('clear-cache',array('as'=>'cache_clear','before'=>'check-lv',function(){
		Cache::flush();
		return Redirect::to('admin/admin')->with('success_top','Dọn dẹp bộ đệm web thành công');
	}));
});

/*Route::get('demo',function(){
	$user = User::find(1)->time;
	$today = date('Y/m/d');
	$vip = strtotime($today) - strtotime($user);
	echo $user.'<br/>';
	echo $today.'<br/>';
	echo $vip;
	echo '<br/>';
	echo $vip/24/3600;
});*/
View::composer('template.slider_top',function($view){
	if (Cache::has('top_slider')) {
		$slider_top = Cache::get('slider_top');
	}else{
		$slider_top = Cache::remember('top_slider',60,function(){
			return Slidertop::all();
		});		
	}
	$view->with('slider_top',$slider_top);
});
View::composer('template.slider_bottom',function($view){
	if (Cache::has('bottom_slider')) {
		$slider_bottom = Cache::get('bottom_slider');
	}else{
		$slider_bottom = Cache::remember('bottom_slider',60,function(){
			return Sliderbottom::all();
		});		
	}
	$view->with('slider_bottom',$slider_bottom);
});