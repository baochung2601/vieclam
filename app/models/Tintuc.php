<?php
	/**
	* 
	*/
	class Tintuc extends Eloquent
	{
		
		protected $table = 'tintuc';
		public $timestamps = false;

		public static $add_tintuc_rules = array(
				'img'=>'required|min:5|max:500',
				'title'=>'required|min:10|max:150',
				'mota'=>'required|min:20|max:400',
				'noidung'=>'required|min:50|max:3000',
			);
		public static $edit_tintuc_rules = array(
				'title'=>'required|min:10|max:150',
				'mota'=>'required|min:20|max:400',
				'noidung'=>'required|min:50|max:3000',
			);

		public static $add_tintuc_language = array(
				'img.required'=>'Hình ảnh không được bỏ trống',
				'img.min'=>'Hình ảnh tối thiểu :min kb',
				'img.max'=>'Hình ảnh tối đa :max kb',
				'title.required'=>'Title không được bỏ trống',
				'title.min'=>'Title tối thiểu :min kí tự',
				'title.max'=>'Title tối đa :max kí tự',
				'mota.required'=>'Mô tả không được bỏ trống',
				'mota.min'=>'Mô tả tối thiểu :min kí tự',
				'mota.max'=>'Mô tả tối đa :max kí tự',
				'noidung.required'=>'Nội dung không được bỏ trống',
				'noidung.min'=>'Nội dung tối thiểu :min kí tự',
				'noidung.max'=>'Nội dung tối đa :max kí tự'
			);

		public static function boot(){
			parent::boot();
			static::deleted(function($cache){
				Cache::flush();
			});
			static::updated(function($cache){
				Cache::flush();
			});
		}

	}
?>