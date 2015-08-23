<?php
	/**
	* 
	*/
	class Page extends Eloquent
	{
		
		protected $table = 'post_public';
		public $timestamps = false;

		public function user(){
			return $this->belongsTo('User','user_id');
		}

		public static function boot(){
			parent::boot();
			static::updated(function($cache){
				Cache::flush();
			});
		}
	}
?>