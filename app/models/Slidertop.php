<?php
	/**
	* 
	*/
	class Slidertop extends Eloquent
	{
		
		protected $table = 'slider_top';
		public $timestamps = false;

		public static $silider_top_rules = array(
				'img'=>'required|image|min:5|max:500',
				'alt'=>'required|max:100',
				'url'=>'required|max:100'
			);

		public static $slider_top_languge = array(
				'img.required'=>'Hình ảnh không được bỏ trống',
				'img.min'=>'Hình ảnh tối thiểu :min kb',
				'img.max'=>'Hình ảnh tối đa :max kb',
				'alt.required'=>'Alt không được bỏ trống',
				'alt.max'=>'Alt tối đa :max kí tự',
				'url.required'=>'Url hình ảnh không được bỏ trống',
				'url.max'=>'Url hình ảnh tối đa :max kí tự'
			);

		public static function boot(){
			parent::boot();
			static::deleted(function($cache){
				Cache::forget('top_slider');
			});
			static::created(function($cache){
				Cache::forget('top_slider');
			});
			static::updated(function($cache){
				Cache::forget('top_slider');
			});
		}
	}
?>