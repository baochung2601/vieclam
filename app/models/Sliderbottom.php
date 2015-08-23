<?php
	/**
	* 
	*/
	class Sliderbottom extends Eloquent
	{
		
		protected $table = 'slider_bottom';
		public $timestamps = false;

		public static function boot(){
			parent::boot();
			static::deleted(function($cache){
				Cache::forget('bottom_slider');
			});
			static::created(function($cache){
				Cache::forget('bottom_slider');
			});
			static::updated(function($cache){
				Cache::forget('bottom_slider');
			});
		}
	}
?>