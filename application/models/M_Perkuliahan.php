<?php

class M_Perkuliahan extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    //galir
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

    //dosen
    function list_dosen() 
    {
        $query=$this->db->get("m_dosen");
        return $query->result();
    }

    function update_dosen($data,$id)
    {
        $this->db->where('id',$id);
        $this->db->update('m_dosen',$data);
    }

    function add_dosen($data)
    {
        $this->db->insert('m_dosen',$data);
    }

    function delete_dosen($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('m_dosen');
    }

    function select_edit_dosen($id)
    {
        $this->db->where('id', $id);
        $query=$this->db->get('m_dosen');

        return $query->result();
    }
}
 ?>
