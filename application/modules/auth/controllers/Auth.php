<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends MY_Controller
{
	public function index()
	{
		$this->load->view('index');
		// $this->template->utama('index');
	}
}
