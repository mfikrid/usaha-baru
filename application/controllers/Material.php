<?php 
class Material extends CI_Controller{
    public function index(){
        $data['barang'] = $this->model_barang->tampil_data()->result();
        $this->load->view('layout/home/header');
        $this->load->view('layout/home/sidebar');
        $this->load->view('homepage/dashboard', $data);
		$this->load->view('homepage/material', $data);
        $this->load->view('layout/home/footer');
    }

}
?>