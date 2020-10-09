<?php

// working of codeigeniter....
class CI_Controller{
	public function view($index){
		echo "View display".$index;
	}
}


class welcome extends CI_Controller 
{
	private $load;

	public function __construct(){
		$load=new CI_Controller();
	}

	public function smoething(){
		$this->load->view("index.php");
	}


}

?>