<?php

class M_Perkuliahan extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function list_galir() 
    {
        $query=$this->db->get("m_galir");
        return $query->result();
    }

    function update_galir($data,$id)
    {
        $this->db->where('id',$id);
        $this->db->update('m_galir',$data);
    }

    function add_galir($data)
    {
        $this->db->insert('m_galir',$data);
    }

    function delete_galir($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('m_galir');
    }

    function select_edit_galir($id)
    {
        $this->db->where('id', $id);
        $query=$this->db->get('m_galir');

        return $query->result();
    }
}
 ?>
