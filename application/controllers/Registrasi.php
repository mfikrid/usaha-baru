<?php 
class Registrasi extends CI_Controller{
    public function index(){
        $this->load->helper('security');
        $this->form_validation->set_rules('nama', 'Nama', 'required',[
            'required' => 'Nama Wajib Diisi!'
        ]);
        $this->form_validation->set_rules('username', 'Username', 'required',[
            'required' => 'Username Wajib Diisi!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required',[
            'required' => 'Password wajib diisi!'
        ]);


        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('layout/login-regist/header_regist');
            $this->load->view('auth/registrasi');
            // $this->load->view('layout/home/footer_regist');
        }else {
            $data = array(
                'id' => '',
                'nama' => $this->input->post('nama'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'role_id' => 2,
            );
            $this->db->insert('tb_users', $data);
            redirect('auth/login');
        }
        
    }
}

?>