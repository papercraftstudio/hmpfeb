<?php

class M_Event extends CI_Model {

  function __construct()
  {
    parent::__construct();
    $this->load->database();
  }


  function get_all_pages() {
    $query=$this->db->get('m_event');
    $result = $query->result();
    return($result);
  }

  function get_page($id) {

    $this->db->where('id',$id);
    $page = $this->db->get('m_event')->row();
    return $page;
  }

  function update($data,$id) {
    $this->db->where('id',$id);
    $this->db->update('m_event',$data);
  }

  function insert($data) {
    $this->db->insert('m_event',$data);
  }


}
 ?>
