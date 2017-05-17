<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_model extends CI_Model {

	public function dropdown_obat(){
    return $this->db->select('kode_obat, nama_obat')
                    ->get('obat')
                    ->result();
  	}

	public function jual(){
		$data = array(
				'id_jual' => $this->input->post('id_jual'),
				'tgl_jual' => $this->input->post('tgl_jual'),
				'qty' => $this->input->post('qty'),
				'keterangan' => $this->input->post('keterangan'),
				'kode_obat' => $this->input->post('nama_obat'),
				'total_jual' => $this->input->post('total_jual')
			);

		//proses insert data
		$this->db->insert('penjualan', $data);

		//cek keberhasilan insert data
		if($this->db->affected_rows() > 0){
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function getStock($kode_obat)
	{
		$query =  $this->db->where('kode_obat',$kode_obat)
						   ->get('obat')
						   ->row();
		return $query->stock;
	}

	public function kurang($kode_obat, $kurangi)
	{
		
		$data = array('stock' => $kurangi );

		$this->db->where('kode_obat', $kode_obat)
				 ->update('obat', $data);
	}

	public function getHarga($kode_obat)
	{
		$query =  $this->db->where('kode_obat',$kode_obat)
						   ->get('obat')
						   ->row();
		return $query->harga;
	}

}

/* End of file transaksi_model.php */
/* Location: ./application/models/transaksi_model.php */