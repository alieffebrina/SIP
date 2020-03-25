<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Login extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		
		$this->load->model('M_login');
		$this->load->library('session');
	}

	function index()
	{
		$this->load->view('login/formlogin');
		
	}

	function registrasi()
	{
		$this->load->view('login/registrasi');
		
	}

	function cek_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		$user = $this->M_login->get($username);

		if(empty($user)){
			$this->session->set_flashdata('pesan','salah');
			$this->load->view('login/formlogin');
		} else {
		    if($password == $user->password){ // Jika password yang diinput sama dengan password yang didatabase
        		$session = array(
		          'authenticated'=>true, // Buat session authenticated dengan value true
		          'username'=>$user->username,  // Buat session username
		          'nama'=>$user->nama, // Buat session authenticated
		          'tipe_user'=>$user->tipe_user
		        );
		        $this->session->set_userdata($session); // Buat session sesuai $session
		        redirect('Welcome'); // Redirect ke halaman welcome
		    }else{
		        $this->session->set_flashdata('message', 'Password salah'); // Buat session flashdata
		        redirect('C_Login'); // Redirect ke halaman login
		    }
   		}
   	}

	function admin_page(){
		$this->load->view('login/admin_page');
	}

	public function logout(){
    $this->session->sess_destroy(); // Hapus semua session
    redirect('C_Login'); // Redirect ke halaman login
	}
}
