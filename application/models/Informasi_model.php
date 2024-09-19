<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi_model extends CI_Model{
    public function get_data($table)
    {
        
        return $this->db->get($table);
    }
    public function getdata_by_id($table,$id){
        return $this->db->get($table,$id);  
    }

    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);  
    }
    public function update_data($data, $table){
        $this->db->where('no', $data['no']);
        $this->db->update($table, $data);
    }

    public function delete ($data, $table)
    {
        $gambar_lama = $this->db->select('Gambar')->get_where($table, array('no' => $data['no']))->row()->Gambar;

        // Hapus gambar dari folder
        if (!empty($gambar_lama)) {
            $gambar_path = './gambar/' . $gambar_lama;
            if (file_exists($gambar_path)) {
                unlink($gambar_path);
            }
        }
        $this->db->where('no', $data['no']);
        $this->db->delete($table);
    }

    public function getInformasiById($no) {
        
        $query = $this->db->get_where('tbl_informasi', array('no' => $no));
        return $query->row_array();
    }
}