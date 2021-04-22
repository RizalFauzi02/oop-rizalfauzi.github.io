<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$url = new \CodeIgniter\HTTP\URI(current_url()); 
		$this->data['page'] = $url->getSegment(2);
		
		$this->data['page_title'] = 'Dashboard';

		return view('welcome_message', $this->data);
	}
}
