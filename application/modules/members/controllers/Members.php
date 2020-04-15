<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Members extends MX_Controller
{
	public function index()
	{

		$this->db->select('users.password_text,users.phone,users.status, members.pin, members.name,members.username')
         ->from('users')
         ->join('members', 'users.members_id = members.id');
		$data['members'] =  $this->db->get()->result();
		$this->template->utama('members', $data);
	}

}
