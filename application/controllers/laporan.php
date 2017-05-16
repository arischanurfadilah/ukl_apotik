<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('laporan_model');
	}

	public function index()
	{
		
	}

	public function lap_beli()
	{
		if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == '0') {
			$data['main_view'] = 'laporan/lap_beli_view';
			$this->load->view('template', $data);
		} else {
			redirect('login');
		}
	}

	public function lap_jual()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['jual'] = $this->laporan_model->lap_jual();
			$data['main_view'] = 'laporan/lap_jual_view';
			$this->load->view('template', $data);
		} else {
			redirect('login');
		}	
	}

}

/* End of file laporan.php */
/* Location: ./application/controllers/laporan.php */