<?php
class Model_barang extends CI_Model{
    public function tampil_data(){
        return $this->db->get('tb_barang'); 
    }
    public function get($table)
	{
		return $this->db->get($table);
	}

	public function insert($data, $table)
	{
		$this->db->insert($table, $data);
	}
	public function edit($where,$table){
		return $this->db->get_where($table,$where);
	}

	public function update($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	public function delete($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}