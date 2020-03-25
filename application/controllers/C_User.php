<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_User extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		
		$this->load->library('session');
		$this->load->model('M_user');
	}

	function index()
	{
		$this->load->view('login/registrasi');
	}

	public function tambah(){
		$data = array();
		
		if($this->input->post('submit')){ // Jika user menekan tombol Submit (Simpan) pada form
			// lakukan upload file dengan memanggil function upload yang ada di GambarModel.php
			$upload = $this->M_user->upload();
			
			if($upload['result'] == "success"){ // Jika proses upload sukses
				 // Panggil function save yang ada di GambarModel.php untuk menyimpan data ke database
				$this->M_user->save($upload);
				echo "sukses upload";
				redirect('C_Login'); // Redirect kembali ke halaman awal / halaman view data
			}else{ // Jika proses upload gagal
				$data['message'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
			}
		}
		
	}
}