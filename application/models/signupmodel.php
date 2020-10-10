<?php
class signupmodel extends CI_Model
{

public function isvalidates($uname,$state,$city,$mobile,$pass){
		$data = array(
			'Name' => $uname,
			'State' => $state,
			'City' => $city,
			'Mobile' => $mobile,
			'password' => $pass

		);
	$this->db->insert('user-login',$data);
}


}


?>