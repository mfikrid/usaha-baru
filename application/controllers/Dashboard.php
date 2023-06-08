<?php
class Dashboard extends CI_Controller{

    public function __construct(){
		parent::__construct();

		if($this->session->userdata('role_id') != '2'){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
  					Anda Belum Login!
 					 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   					 <span aria-hidden="true">&times;</span>
  					</button>
					</div>');
			redirect('auth/login');
		}
	}
    public function index(){
        $data['barang'] = $this->model_barang->tampil_data()->result();
        $this->load->view('layout/home/header');
        $this->load->view('layout/home/sidebar');
        $this->load->view('homepage/dashboard', $data);
		$this->load->view('homepage/kecantikan', $data);
        $this->load->view('layout/home/footer');
    }
}
?>