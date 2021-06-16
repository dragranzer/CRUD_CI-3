<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Mahasiswa extends CI_Model{

    public function getDataMahasiswa(){
        $this->db->select('*');
        $this->db->from('tb_mahasiswa');
        $query = $this->db->get();
        return $query->result();
    }

    public function InsertDataMhs($data){
        $this->db->insert('tb_mahasiswa',$data);
    }

    public function editDataMhs($data, $id){
        $this->db->where('NIM',$id);
        $this->db->update('tb_mahasiswa',$data);
    }

    public function getDataMahasiswaDetail($id){
        $this->db->where('NIM',$id);
        $query = $this->db->get('tb_mahasiswa');
        return $query->row();
    }

    public function deleteDataMhs($id){
        $this->db->where('NIM',$id);
        $this->db->delete('tb_mahasiswa');
    }
}