<?php 
    class Data_barang extends CI_Controller{
        public function index(){
            $data['barang'] = $this->model_barang->tampil_data()->result();
            $this->load->view('layout/admin/header');
            $this->load->view('layout/admin/sidebar');
            $this->load->view('admin/produk/data_barang', $data);
            $this->load->view('layout/admin/footer');
        }

	    public function insert(){
            $nama_brg 	= $this->input->post('nama_brg');
            $keterangan = $this->input->post('keterangan');
            $kategori 	= $this->input->post('kategori');
            $modal      = $this->input->post('modal');
            $harga 		= $this->input->post('harga');
            $stok 		= $this->input->post('stok');
            $gambar		= $_FILES['gambar']['name'];
            if ($gambar = '') {
            } else {
                $config['upload_path'] = './uploads';
                $config['allowed_types'] = 'jpg|jpeg|png';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('gambar')) {
                    echo "File tidak dapat di upload!";
                } else {
                    $gambar = $this->upload->data('file_name');
                }
            }

            $data = array(
                'nama_brg' 	=> $nama_brg,
                'keterangan' 	=> $keterangan,
                'kategori' 	=> $kategori,
                'modal'     => $modal,
                'harga' 	=> $harga,
                'stok' 	=> $stok,
                'gambar' 	=> $gambar
            );

            $this->model_barang->insert($data, 'tb_barang');
            $_SESSION["sukses"] = 'Product berhasil di tambahkan';
            redirect('admin/Data_barang/index');
        }
        public function edit($id)
        {
            $where = array('id_brg' =>$id);
            $data['barang'] = $this->model_barang->edit($where, 'tb_barang')->result();
            $this->load->view('layout/admin/header');
            $this->load->view('layout/admin/sidebar');
            $this->load->view('admin/produk/edit', $data);
            $this->load->view('layout/admin/footer');
        }
        public function delete($id)
        {
            $where = array('id_brg' => $id);
            $this->model_barang->delete($where, 'tb_barang');
            redirect('admin/Data_barang/index');
        }
    }
    

?> 