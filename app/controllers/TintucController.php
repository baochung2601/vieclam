<?php
	/**
	* 
	*/
	class TintucController extends BaseController
	{
		
		public function list_tintuc(){
			$data['tintuc'] = Tintuc::orderby('id','desc')->paginate(5);
			$data['title'] = 'Tin tức việc làm';
			return View::make('template.list_tintuc',$data);
		}

		public function view_tintuc($id,$title){
			if (Cache::has('view_tintuc'.$id)) {
				$data['tintuc'] = Cache::get('view_tintuc'.$id);
			}else{
				$data['tintuc'] = Cache::remember('view_tintuc'.$id,15,function() use ($id){
					return Tintuc::find($id);
				});				
			}
			$data['title'] = $title;
			return View::make('template.view_tintuc',$data);
		}
	}
?>