<?php

class Users extends CI_controller{

	public function User(){

		//$this->load->model('Usermodel');
		$data['users']=$this->Usermodel->getUserdata();
		// print_r($data);
		$this->load->view('Users/userslist',$data);
	}
}

?>