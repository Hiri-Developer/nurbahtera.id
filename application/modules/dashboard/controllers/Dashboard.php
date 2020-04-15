<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		// if ($this->session->userdata('login') != TRUE) {

		// 	redirect('auth', 'refresh');
		// }
	}

	public function index()
	{
		$this->template->utama('dashboard');
	}
}
