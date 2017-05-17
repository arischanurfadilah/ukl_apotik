<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('transaksi_model');
		$this->load->model('obat_model');
	}

	public function index()
	{
		
	}

	public function beli()
	{
		if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == '0') {
			$data['main_view'] = 'transaksi/form_beli_view';
			$this->load->view('template', $data);
		} else {
			redirect('login');
		}
	}

	public function jual()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$idjualacak = (string) random_int(100, 999);
			$idjual = 'J'.$idjualacak;
			$data['idjualacak'] = $idjual;

			$data['total_jual'] = 'value=""';

			$data['main_view'] = 'transaksi/form_jual_view';
			$data['obat'] = $this->transaksi_model->dropdown_obat();
			$this->load->view('template', $data);
		} else {
			redirect('login');
		}	
	}

	public function do_jual()
	{
		$this->form_validation->set_rules('id_jual', 'kode jual', 'trim|required');
		$this->form_validation->set_rules('tgl_jual', 'tgl jual', 'trim|required');
		$this->form_validation->set_rules('nama_obat', 'nama obat', 'trim|required');
		$this->form_validation->set_rules('qty', 'quantity', 'trim|required|numeric');
		$this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');
		
		if ($this->form_validation->run() == TRUE)
		{

			if($this->transaksi_model->jual() == TRUE)
				{

					$idjualacak = (string) random_int(100, 999);
					$idjual = 'J'.$idjualacak;
					$data['idjualacak'] = $idjual;
					
					$kode_obat = $this->input->post('nama_obat');
					$stock = $this->transaksi_model->getStock($kode_obat);
					$qty = $this->input->post('qty');
					$kurangi = $stock - $qty;
					$this->transaksi_model->kurang($kode_obat, $kurangi);

					$harga = $this->transaksi_model->getHarga($kode_obat);
					$total = $qty * $harga;
					$data['total_jual'] = 'value="'.$total.'"';
					
					$data['obat'] = $this->transaksi_model->dropdown_obat();
					$data['main_view'] = 'transaksi/form_jual_view';
					$data['notif'] = 'Transaksi berhasil';
					$this->load->view('template', $data);
				} else {
					$data['main_view'] = 'transaksi/form_jual_view';
					$data['notif'] = 'Transaksi gagal';
					$this->load->view('template', $data);
				}
		} else {
			$data['notif'] = validation_errors();
			$data['main_view'] = 'transaksi/form_jual_view';
			$this->load->view('template', $data);
		}
	}


}

/* End of file transaksi.php */
/* Location: ./application/controllers/transaksi.php */