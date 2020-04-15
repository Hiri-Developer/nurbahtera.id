<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jaringan extends MX_Controller
{


	public function index()
	{
		// $data['members'] = $this->member();
		// $this->load->view('jaringan',$data);

	}

	public function tree()
	{
		if ($this->uri->segment(3)) {
			$query = $this->db->get_where('members', ['username' => $this->uri->segment(3)])->result();
		} else {
			$query = $this->db->get('members')->result();
		}
		$data['members'] = json_encode($query);
		$this->load->view('jaringan', $data);
	}

	public function member()
	{
		if ($this->uri->segment(3)) {
			$query = $this->db->get_where('members', ['upline' => 'NGS518457'])->result();
		} else {
			$query = $this->db->get('members')->result();
		}
		return json_encode($query);
	}

	public function checkMember($userId)
	{
		return $this->db->get_where('member', ['memberId' => $userId])->num_rows();
	}
}
