<?php
class Kategori extends CI_Controller{
    public function index(){
        $data['kategori'] = $this->model_kategori->tampil_data()->result();
        $this->load->view('layout/home/header');
        $this->load->view('layout/home/sidebar');
        $this->load->view('layout/home/kategori');
        $this->load->view('homepage/kategori', $data);
        // $this->load->view('layout/home/footer');
    }
    public function kecantikan(){
        $this->load->view('layout/home/header');
        $this->load->view('layout/home/sidebar');
        $this->load->view('layout/home/kecantikan');
        $this->load->view('homepage/kategori');
    }
    public function insert(){
        $kecantikan 	    = $this->input->post('kecantikan');
        $kesehatan          = $this->input->post('kesehatan');
        $dapur 	            = $this->input->post('dapur');
        $sekolah            = $this->input->post('sekolah');
        $ibu_bayi 		    = $this->input->post('ibu_bayi');
        $elektronik 	    = $this->input->post('elektronik');
        $makanan_minuman	= $this->input->post('ibu_bayi');
        $material           = $this->input->post('material');

        $data = array(
            'kecantikan' 	    => $kecantikan,
            'kesehatan' 	    => $kesehatan,
            'dapur' 	        => $dapur,
            'sekolah'           => $sekolah,
            'ibu_bayi' 	        => $ibu_bayi,
            'elektronik' 	    => $elektronik,
            'makanan_minuman' 	=> $makanan_minuman,
            'material'          => $material
        );
        $this->model_kategori->insert($data, 'kategori');
    }
}
    
?>