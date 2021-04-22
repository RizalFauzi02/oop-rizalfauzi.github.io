<?php

namespace App\Controllers;
Header('Access-Control-Allow-Origin: *'); //for allow any domain, insecure
Header('Access-Control-Allow-Headers: *'); //for allow any headers, insecure
Header('Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE'); //method allowed

class Menu extends BaseController
{
	public function index()
	{
		$url = new \CodeIgniter\HTTP\URI(current_url()); 
		$this->data['page'] = $url->getSegment(2);
		
		$this->data['page_title'] = 'Menu';

		return view('menu', $this->data);
	}
}