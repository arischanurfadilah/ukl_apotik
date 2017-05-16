<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obat_model extends CI_Model {

	public function get_data_obat()
	{
		return $this->db->order_by('nama_obat', 'ASC')
						->get('obat')
						->result();
	}

	public function get_data_byId($kode_obat){
		return $this->db->where('kode_obat', $kode_obat)
						->get('obat')
						->row();
	}

	public function update_pegawai($kode_obat)
	{
		$data = array(
			'kode_obat' => $this->input->post('kode_obat'),
			'nama_obat' => $this->input->post('nama_obat'),
			'indikasi' => $this->input->post('indikasi'),
			'stock_obat' => $this->input->post('stock_obat'),
			'harga_obat' => $this->input->post('harga_obat')
		);

		$this->db->where('kode_obat', $kode_obat)
				 ->update('obat', $data);

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		}else{
			return FALSE;
		}
	}

}

/* End of file obat_model.php */
/* Location: ./application/models/obat_model.php */