<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perusahaan extends MX_Controller
{
	public function index()
	{
		$data['profile'] =  $this->db->get('profiles')->row();
		$this->template->utama('perusahaan', $data);
	}

}
