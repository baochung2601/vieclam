<?php

class GioithieuController extends BaseController {

	public function vechungtoi()
	{
		$data['gioithieu'] = Gioithieu::find(1);
		$data['title'] = 'Về chúng tôi';
		return View::make('template.gioithieu',$data);
	}

	public function lienhe()
	{
		$data['gioithieu'] = Gioithieu::find(2);
		$data['title'] = 'Liên hệ';
		return View::make('template.gioithieu',$data);
	}

	public function quydinh()
	{
		$data['gioithieu'] = Gioithieu::find(3);
		$data['title'] = 'Quy định sử dụng';
		return View::make('template.gioithieu',$data);
	}

}
