<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_model extends CI_Model {

	public function lap_jual()
	{
		$this->db->query("SELECT * FROM penjualan NATURAL JOIN obat;")
				->result();
		// return $query;
		// return $this->db->select('*')
		// 				->from('penjualan')
		// 				->join('obat','penjualan.kode_obat = obat.kode_obat', 'natural')
		// 				->order_by('id_jual', 'ASC')
		// 				->result();
	}

}

/* End of file laporan_model.php */
/* Location: ./application/models/laporan_model.php */