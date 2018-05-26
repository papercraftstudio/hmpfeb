<?php

class M_Galery extends CI_Model {

  function __construct()
  {
    parent::__construct();
    $this->load->database();
  }


  function get_all_events() {
    $query=$this->db->get('m_event');
    $result = $query->result();
    return($result);
  }

  function get_event($id) {

    $this->db->where('id',$id);
    $page = $this->db->get('m_event')->row();
    return $page;
  }

  function update($data,$id) {
    $this->db->where('id',$id);
    $this->db->update('m_event',$data);
  }

  function delete($id) {
    $this->db->where('id',$id);
    $this->db->delete('m_event');
  }

  function insert($data) {
    $this->db->insert('m_galery',$data);
  }


}
 ?>
