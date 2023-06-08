<?php
class Model_kategori extends CI_Model{
    public function tampil_data(){
        return $this->db->get('kategori'); 
    }
    public function get($table)
	{
		return $this->db->get($table);
	}

	public function insert($data, $table)
	{
		$this->db->insert($table, $data);
	}
    
}