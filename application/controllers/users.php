<?php

class Users extends CI_controller{

	public function User(){

		//$this->load->model('Usermodel');  //this added to autoload model for reduce code
		$data['users']=$this->Usermodel->getUserdata();
		// print_r($data);
		$this->load->view('Users/userslist',$data);
	}
}

?>