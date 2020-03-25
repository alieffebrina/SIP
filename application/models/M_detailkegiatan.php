<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_detailkegiatan extends CI_Model {

function getdetailkegiatan(){
		$this->db->select('*');
		$this->db->from('tb_detailkegiatan');
		$this->db->join('tb_kegiatan', 'tb_kegiatan.id_kegiatan = tb_detailkegiatan.id_kegiatan');
		$query = $this->db->get();
    	return $query->result();
    }
}