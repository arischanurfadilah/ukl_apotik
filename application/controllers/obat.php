<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obat extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('obat_model');
	}

	public function index()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view'] = 'welcome_view';
			$this->load->view('template', $data);
		} else {
			redirect('login');
		}	
	}

	public function data_obat()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view'] = 'obat/data_obat_view';
			$data['obat'] = $this->obat_model->get_data_obat();
			
			$this->load->view('template', $data);
		} else {
			redirect('login');
		}	
	}

	public function simpan_obat()
	{
		$data['main_view'] = 'obat/add_obat_view';
		$this->load->view('template', $data);
	}

	public function edit_obat()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view'] = 'obat/edit_obat_view';
			$this->load->view('template', $data);
		} else {
			redirect('login');
		}
	}

	public function do_edit()
	{
		if ($this->input->post('edit')) {
			$this->form_validation->set_rules('kode_obat', 'kode obat', 'trim|required');
			$this->form_validation->set_rules('nama obat', 'nama obat', 'trim|required');
			$this->form_validation->set_rules('indikasi', 'indikasi', 'trim|required');
			$this->form_validation->set_rules('stock_obat', 'stock obat', 'trim|required');
			$this->form_validation->set_rules('harga_obat', 'No. telepon', 'trim|required|numeric');

			if ($this->form_validation->run() == TRUE) {
				if ($this->obat_model->update_obat($this->uri->segment(3) == TRUE)){
					$data['main_view'] = 'obat/edit_obat_view';
					$data['data'] = $this->obat_model->get_data_byId($this->uri->segment(3));
					$data['notif'] = 'Update data obat berhasil';
					$this->load->view('template', $data);
				} else {;
					$data['main_view'] = 'obat/edit_obat_view';
					$data['notif'] = 'Update data obat gagal!!!';
					$data['data'] = $this->obat_model->get_data_byId($this->uri->segment(3));
					$this->load->view('template', $data);
				}			
			} else {
				$data['main_view'] = 'obat/edit_obat_view';
				$data['data'] = $this->obat_model->get_data_byId($this->uri->segment(3));
				$data['notif'] = validation_errors();
				$this->load->view('template', $data);
			}
		}
	}

}

/* End of file obat.php */
/* Location: ./application/controllers/obat.php */