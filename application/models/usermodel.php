<?php


class Usermodel extends CI_model{
	
	public function getUserdata(){
	
		//$this->load->database();

		//this is where condition 
		$this->db->where("id",1);

		//this method is active record
		$q=$this->db->get("user_info");


		return $q->result_array();



		// echo "<pre>";
		// print_r($result);

	}

}



?>