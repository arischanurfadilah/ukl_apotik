<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
	}

	public function index()
	{
		$this->load->view('login_view');
	}

	public function masuk()
	{
		if($this->input->post('submit')){
			
			$this->form_validation->set_rules('username', 'Username', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');

			if($this->form_validation->run() == TRUE){

				if($this->login_model->cek_user() == TRUE){
					redirect('obat');
				} else {
					$data['notif'] = 'Login gagal';
					$this->load->view('login_view', $data);
				}

			} else {
				$data['notif'] = validation_errors();
				$this->load->view('login_view', $data);
			}
		}
	}

	public function logout()
	{
		$data = array(
			'username' => '',
			'logged_in' => FALSE);
		$this->session->sess_destroy();
		$this->load->view('login_view');
	}

	
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */