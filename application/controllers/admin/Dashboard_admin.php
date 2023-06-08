<?php
class Dashboard_admin extends CI_Controller{
    public function index(){
        $this->load->view('layout/admin/header');
        $this->load->view('layout/admin/sidebar');
        $this->load->view('admin/dashboard/dashboard');
        $this->load->view('layout/admin/footer');
    }
}
?>