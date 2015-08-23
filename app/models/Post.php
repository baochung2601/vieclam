<?php
	/**
	* 
	*/
	class Post extends Eloquent
	{
		
		protected $table = 'post';

		public $timestamps = false;

		public function user(){
			return $this->belongsTo('User','user_id');
		}
	}
?>