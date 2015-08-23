<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');
	public $timestamps = false;

	public static $register_rules = array(
					'username'=>'required|alpha_num|min:5|max:20|unique:users,username',
					'password'=>'required|alpha_num|min:5|max:30',
					're_password'=>'required|same:password',
					'email'=>'required|email|unique:users,email',
					'g-recaptcha-response' => 'required|captcha'
		);

	public static $language = array(
					'username.required'=>'Tài khoản không được để trống',
					'username.alpha_num'=>'Tài khoản chỉ gồm chữ cái và số',
					'username.min'=>'Tài khoản tối thiểu 5 kí tự',
					'username.max'=>'Tài khoản tối đa 20 kí tự',
					'username.unique'=>'Tài khoản đã tồn tại',
					'password.required'=>'Mật khẩu không được bỏ trống',
					'password.alpha_num'=>'Mật khẩu chỉ gồm chữ cái và số',
					'password.min'=>'Mật khẩu tối thiểu 5 kí tự',
					'password.max'=>'Mật khẩu tối đa 30 kí tự',
					're_password.required'=>'Nhập lại mật khẩu không được bỏ trống',
					're_password.same'=>'Nhập lại mật khẩu không chính xác',
					'email.required'=>'Email không được bỏ trống',
					'email.email'=>'Email không hợp lệ',
					'email.unique'=>'Email đã được sử dụng',
					'g-recaptcha-response.required'=>'Vui lòng nhập captcha',
					'g-recaptcha-response.captcha'=>'Captcha không đúng',
					'info.required'=>'Thông tin không được bỏ trống',
					'info.min'=>'Thông tin giới thiệu quá ngắn',
					'info.max'=>'Thông tin tối đa 1500 kí tự',
					'img.image'=>'Không phải là hình ảnh',
					'img.min'=>'Hình ảnh tối thiểu :min kb',
					'img.max'=>'Hình ảnh tối đa :max kb',
					'new_password.required'=>'Mật khẩu mới không được bỏ trống',
					'new_password.alpha_num'=>'Mật khẩu mới chỉ gồm chữ cái và số',
					'new_password.min'=>'Mật khẩu mới tối thiểu 5 kí tự',
					'new_password.max'=>'Mật khẩu mới tối đa 30 kí tự',
					're_new_password.required'=>'Nhập lại mật khẩu mới không được bỏ trống',
					're_new_password.same'=>'Nhập lại mật khẩu mới không chính xác',
					'hienthi.required'=>'Tên hiển thị không được bỏ trống',
					'hienthi.min'=>'Tên hiển thị tối thiểu :min kí tự',
					'hienthi.max'=>'Tên hiển thị tối đa :max kí tự'
		);

	public static $login_rules = array(
					'username'=>'required|alpha_num|min:5|max:20',
					'password'=>'required|alpha_num|min:5|max:30',
		);

	public static $quenmk_rules = array(
					'username'=>'required|alpha_num|min:5|max:20',
					'g-recaptcha-response' => 'required|captcha'
		);

	public static $user_update_rules = array(
					'img'=>'image|min:10|max:2500',
					'hienthi'=>'required|min:5|max:50',
					'info'=>'required|min:18|max:1500',
					'g-recaptcha-response' => 'required|captcha'
		);

	public static $change_pass_rules = array(
					'password'=>'required|alpha_num|min:5|max:30',
					'new_password'=>'required|alpha_num|min:5|max:30',
					're_new_password'=>'required|same:new_password',
					'g-recaptcha-response' => 'required|captcha'
		);

	/*public static $user_info_img_rules = array(
					'file'=>'image|min:10|max:2500',
		);*/

	public static $password_restore_rules = array(
					'password'=>'required|alpha_num|min:5|max:30',
					're_password'=>'required|same:password',
		);

	public static $user_post_rules = array(
					'title'=>'required|min:20|max:100',
					'loai'=>'required|numeric',
					'phanloai'=>'required|numeric',
					'mota'=>'required|min:20|max:300',
					'noidung'=>'required|min:30|max:2000',
					'mucluong'=>'required|max:30',
					'soluong'=>'required|max:30',
					'lienhe'=>'required|min:20|max:300',
					'g-recaptcha-response' => 'required|captcha'
		);

	public static $user_post_language = array(
					'title.required'=>'Tiêu đề không được bỏ trống',
					'title.min'=>'Tiêu đề tối thiểu :min kí tự',
					'title.max'=>'Tiêu đề tối đa :max kí tự',
					'loai.required'=>'Ngành nghề không được bỏ trống',
					'phanloai.required'=>'Phân loại không được bỏ trống',
					'mota.required'=>'Mô tả không được bỏ trống',
					'mota.min'=>'Mô tả tối thiểu :min kí tự',
					'mota.max'=>'Mô tả tối đa :max kí tự',
					'noidung.required'=>'Nội dung không được bỏ trống',
					'noidung.min'=>'Nội dung tối thiểu :min kí tự',
					'noidung.max'=>'Nội dung tối đa :max kí tự',
					'mucluong.required'=>'Mức lương không được bỏ trống',
					'mucluong.max'=>'Múc lương tối đa :max kí tự',
					'soluong.required'=>'Số lượng không được bỏ trống',
					'soluong.max'=>'Số lượng tối đa :max kí tự',
					'lienhe.required'=>'Liên hệ không được bỏ trống',
					'lienhe.min'=>'Liên hệ tối thiểu :min kí tự',
					'lienhe.max'=>'Liên hệ tối đa :max kí tự',
					'g-recaptcha-response.required'=>'Vui lòng nhập captcha',
					'g-recaptcha-response.captcha'=>'Captcha không đúng',
		);
	public static $admin_post_rules = array(
					'title'=>'required|min:20|max:100',
					'loai'=>'required|numeric',
					'phanloai'=>'required|numeric',
					'mota'=>'required|min:20|max:300',
					'noidung'=>'required|min:30|max:2000',
					'mucluong'=>'required|max:30',
					'soluong'=>'required|max:30',
					'lienhe'=>'required|min:20|max:300',
		);

	public static $adm_add_rules = array(
					'username'=>'required|alpha_num|min:5|max:20|unique:users,username',
					'password'=>'required|alpha_num|min:5|max:30',
					're_password'=>'required|same:password',
					'email'=>'required|email|unique:users,email',
		);
	
	public function page(){
		return $this->hasMany('Page');
	}

	public function post(){
		return $this->hasMany('Post');
	}
}
