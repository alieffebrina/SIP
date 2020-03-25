<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class GambarModel extends CI_Model {
	// Fungsi untuk menampilkan semua data gambar
	public function view(){
		return $this->db->get('tb_member')->result();
	}
	
	// Fungsi untuk melakukan proses upload file
	public function upload(){
		$countfiles = count($_FILES['files']['name']);
		$path= FCPATH.'assets\foto';
		//echo $path;
		$config['upload_path'] = $path;
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size']	= '';
		$config['remove_space'] = TRUE;
		$this->load->library('upload', $config); // Load konfigurasi uploadnya
		$this->upload->initialize($config);
		if($this->upload->do_upload('input_gambar')){ // Lakukan upload dan Cek jika proses upload berhasil
			// Jika berhasil :
			//echo "alief";
			 $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			 return $return;
		}else{
			// Jika gagal :
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			//$this->load->view('login/registrasi',$error);
			return $return;
		}
	}
	
	// Fungsi untuk menyimpan data ke database
	public function save($upload){
		
		$data = array(
            'foto' => $upload['file']['file_name'],
            'ukuran_foto' => $upload['file']['file_size'],
            'tipe_foto' => $upload['file']['file_type'],
            'nama_member' => $this->input->post('nama'), 
            'username' => $this->input->post('username'),
            'password'=>$this->input->post('password'),
            'alamat'=>$this->input->post('alamat'),
            'rtrw'=>$this->input->post('rt'),
            'kelurahan'=>$this->input->post('kel'),
            'kecamatan'=>$this->input->post('kec'),
            'kota'=>$this->input->post('kota'),
            'provinsi'=>$this->input->post('prov'),
            'alamat_domisili'=>$this->input->post('alamat_dom'),
            'rtrw_domisili'=>$this->input->post('rt_dom'),
            'kel_domisili'=>$this->input->post('kel_dom'),
            'kec_domisili'=>$this->input->post('kec_dom'),
            'prov_domisili'=>$this->input->post('prov_dom'),
            'tgllahir'=>$this->input->post('tgl_lahir'),
            'email'=>$this->input->post('email'),
            'tlf'=>$this->input->post('tlf'),
            'wa'=>$this->input->post('wa'),
            'infaq'=>'1'
        );
        
        $this->db->insert('tb_member', $data);
	}
}
