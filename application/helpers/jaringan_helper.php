<?php 
//Untuk check member ada atau tidak
function members($memberId = null)
{
	$CI=& get_instance();
	if ($memberId != null) {
		$query =$CI->db->get_where('members',['upline' => $memberId])->result();
	}else {
		$query =$CI->db->get('members')->result();
	}
	return json_encode($query);
}
function checkMember($memberId)
{
	$CI=& get_instance();
	return $CI->db->get_where('members',['upline' => $memberId])->num_rows();
}
?>