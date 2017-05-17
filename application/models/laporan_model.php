<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_model extends CI_Model {

	public function lap_jual()
	{
		$sql = "SELECT * FROM penjualan NATURAL JOIN obat";
		return $this->db->query($sql)
						->result();
	}

}

/* End of file laporan_model.php */
/* Location: ./application/models/laporan_model.php */