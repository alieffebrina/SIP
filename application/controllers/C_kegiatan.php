<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_kegiatan extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library('session');
		$this->load->model('M_kegiatan');
	}
	
	public function index(){
		$jumlah_data = $this->M_kegiatan->jumlah_data();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'index.php/C_kegiatan/index/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 10;
		$config['uri_segment'] = 3;
		$config['num_links'] = 3;
		$afrom = $this->uri->segment(3);
		$this->pagination->initialize($config);
		$page =($this->uri->segment($config['uri_segment'])) ? segment($config['uri_segment']) : 0;
		$data ['links'] = $this->pagination->create_links();		
		$data['tb_kegiatan'] = $this->M_kegiatan->get_authors($config['per_page'],$afrom);	

		$tambah['tb_kegiatan'] = $this->M_kegiatan->pilihid()->result();
		$this->load->view('kegiatan/tambahkegiatan',$tambah);
		$data['tb_kegiatan'] = $this->M_kegiatan->getkegiatan();
		$this->load->view('kegiatan/listkegiatan',$data);

				
	}

	public function tambah(){
		//$data = array();
		$a = $this->input->post('submit');
		
		if($a = "ok"){
			$this->M_kegiatan->tambahdata();
			$this->M_kegiatan->upload();
		} else{
			echo "error";
		}
		$data['tb_kegiatan'] = $this->M_kegiatan->pilihid()->result();
		$this->load->view('kegiatan/formkegiatan',$data);
	}

	public function list(){
		//$this->load->view('kegiatan/formkegiatan');
		$data['tb_kegiatan'] = $this->M_kegiatan->getkegiatan()->result();
		$this->load->view('kegiatan/formkegiatan',$data);
	}
}

?>
