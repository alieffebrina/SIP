<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Controller extends CI_Controller{
    public function __construct(){
        parent::__construct();
        // Cek apakah terdapat session dengan nama authenticated
        if( ! $this->session->userdata('authenticated')) // Jika tidak ada
            redirect('C_Login'); // Redirect ke halaman login
    }

    public function index(){
    	
		$datadetailkeg['tb_detailkegiatan'] = $this->M_detailkegiatan->getdetailkegiatan();
		$this->load->view('template/header',$datadetailkeg);
    }
?>
