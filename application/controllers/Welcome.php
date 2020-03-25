<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library('session');
		$this->load->model('M_detailkegiatan');
	}

	public function index()
	{
		//$this->load->view('login/formlogin');
		
		$datadetailkeg['tb_detailkegiatan'] = $this->M_detailkegiatan->getdetailkegiatan();
		$this->load->view('template/header',$datadetailkeg);
		$this->load->view('template/index');

	}
}
