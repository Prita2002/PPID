<?php 
defined('BASEPATH') OR exit('No direct script access aalowed');

class Page_model extends CI_Model{

    public function get_data($table)
    {
        
        return $this->db->get($table)->result();
    }
    public function getdata_by_id($table,$id){
        return $this->db->get($table,$id);  
    }

    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);  
    }
    public function update_data($data, $table)
    {
    $id = $data['Content_id'];
    unset($data['Content_id']); 
    $this->db->where('Content_id', $id);
    $this->db->update($table, $data);
    }


    public function delete ($data, $table)
    {
        $gambar_lama = $this->db->select('Gambar')->get_where($table, array('Content_id' => $data['Content_id']))->row()->Gambar;
        if (!empty($gambar_lama)) {
            $gambar_path = './gambar/' . $gambar_lama;
            if (file_exists($gambar_path)) {
                unlink($gambar_path);
            }
        }

        $this->db->where('Content_id', $data['Content_id']);
        $this->db->delete($table);
    }
    
    public function get_content_by_id($id){
        $data = $this->db->get_where('tbl_page', array('Content_id' => $id));
        return $data->row_array();
    }
}

?>