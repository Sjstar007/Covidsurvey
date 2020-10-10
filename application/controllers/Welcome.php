<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller. 
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//To load model 
		/*$this->load->model('Authenticate');
		$data=$this->Authenticate->getdata();
		print_r($data);*/
		// $this->load->helper("url");
		 $this->load->helper("html");
		$this->load->view('Home');
		echo "hello";
	}
	public function demo(){
			$this->form_validation->set_rules('uname','Useer-name','required|alpha');
			$this->form_validation->set_rules('ustate','State','required|alpha');
			$this->form_validation->set_rules('ucity','City','required|alpha');
			$this->form_validation->set_rules('umobile','Moblie','required');
		$this->form_validation->set_rules('upass','Useer-password','required|max_length[12]');

		if ($this->form_validation->run()) {
			$uname=$this->input->post('uname');
			$ustate=$this->input->post('ustate');
			 $ucity=$this->input->post('ucity');
			$umobile=$this->input->post('umobile');
			$upass=$this->input->post('upass');
			$this->load->model('signupmodel');
			if($this->signupmodel->isvalidates($uname,$ustate,$ucity,$umobile,$upass)){
				//logic correct
				echo "data gya";
			}
			else{
				//logic failed
				// echo "data nhi gya";
			$this->load->view('surveypanal');
			}
			// echo "Validation succesfull";
		}
		else {
			$this->load->view('Home');

		}
	}
}
