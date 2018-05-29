<?php

class M_Kajian extends CI_Model {

  function __construct()
  {
    parent::__construct();
    $this->load->database();
  }


  function get_all_kajian() {
    $query=$this->db->get('m_kajian');
    $result = $query->result();
    return($result);
  }

  function get_kajian($id) {

    $this->db->where('id',$id);
    $page = $this->db->get('m_kajian')->row();
    return $page;
  }

  function update($data,$id) {
    $this->db->where('id',$id);
    $this->db->update('m_kajian',$data);
  }

  function insert($data) {
    $this->db->insert('m_kajian',$data);
  }

  function delete($id) {
    $this->db->where('id',$id);
    $this->db->delete('m_kajian');
  }


}
 ?>
