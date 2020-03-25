<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gambar extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model('GambarModel');
	}
	
	public function index(){
		$this->load->view('login/registrasi');
	}
	
	public function tambah(){
		$data = array();
		$a = $this->input->post('submit');
		
		if($a = "ok"){ // Jika user menekan tombol Submit (Simpan) pada form
			// lakukan upload file dengan memanggil function upload yang ada di GambarModel.php
			//echo "oke";

			$upload = $this->GambarModel->upload();
			
			if($upload['result'] == "success"){ // Jika proses upload sukses
				 // Panggil function save yang ada di GambarModel.php untuk menyimpan data ke database
				$this->GambarModel->save($upload);
				//echo "sukses";
				//redirect('gambar'); // Redirect kembali ke halaman awal / halaman view data
			}else{ // Jika proses upload gagal
				$data['message'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
				echo "error upload".$data['message'];
			}
		} else{
			echo "error";
		}
		
		$this->load->view('login/formlogin');
	}
}

?>
