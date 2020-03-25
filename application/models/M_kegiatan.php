<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_kegiatan extends CI_Model {
	// Fungsi untuk menampilkan semua data gambar
	function get_authors($number,$offset){
		return $query = $this->db->get('tb_kegiatan',$number,$offset)->result();		
	}
	
	function jumlah_data(){
		return $this->db->get('tb_kegiatan')->num_rows();
	}

	function getkegiatan(){
		$this->db->select('*');
		$this->db->from('tb_kegiatan');
		$this->db->join('tb_detailkegiatan', 'tb_detailkegiatan.id_kegiatan = tb_kegiatan.id_kegiatan');
		$query = $this->db->get();
    	return $query->result();
    }
    

	public function tambahdata(){
		$data = array(
            'judul' => $this->input->post('nama'), 
            'tempat' => $this->input->post('lokasi'),
            'tgl_kegiatan'=>$this->input->post('tgl'),
            'uraian'=>$this->input->post('uraian')
        );
        
        $this->db->insert('tb_kegiatan', $data);
    }

    function pilihid(){
    	$this->db->select_max('id_kegiatan');
	    return $this->db->get('tb_kegiatan');
    }

	function upload(){
		$path= FCPATH.'assets\fotokegiatan';
		$config['upload_path'] = $path;
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['remove_space'] = TRUE;
		$this->load->library('upload', $config); // Load konfigurasi uploadnya
		$this->upload->initialize($config);
		$image= array();
		$cpt = count($_FILES['input_gambar']['name']);
		for($i=0; $i<$cpt; $i++)
	    {           
	        $_FILES['file']['name']= $_FILES['input_gambar']['name'][$i];
	        $_FILES['file']['type']= $_FILES['input_gambar']['type'][$i];
	        $_FILES['file']['tmp_name']= $_FILES['input_gambar']['tmp_name'][$i];
	        $_FILES['file']['error']= $_FILES['input_gambar']['error'][$i];
	        $_FILES['file']['size']= $_FILES['input_gambar']['size'][$i];    
	        $this->upload->initialize($config);
	        $this->upload->do_upload('file');
        	$imageData = $this->upload->data();
        	$uploadImgData[$i]['id_kegiatan'] = $this->input->post('id');
            $uploadImgData[$i]['foto_detail'] = $imageData['file_name'];
            $uploadImgData[$i]['ukuran'] = $imageData['file_size'];
            $uploadImgData[$i]['tipe_foto'] = $imageData['file_type'];
	    }
	    $this->M_kegiatan->save($uploadImgData); 
	}
	
	// Fungsi untuk menyimpan data ke database
	function save($image){   
        $this->db->insert_batch('tb_detailkegiatan', $image);
    }

    function getdetailkegiatan(){
		$this->db->select('*');
		$this->db->from('tb_detailkegiatan');
		$this->db->join('tb_kegiatan', 'tb_kegiatan.id_kegiatan = tb_detailkegiatan.id_kegiatan');
		$query = $this->db->get();
    	return $query->result();
    }

   
}
