<?php

class M_Page extends CI_Model {
  function edit() {
    $this->load->view('insert_page');
  }

  function get_all_pages() {
    $query=$this->db->get('m_page');
    $result = $query->result();
    return($result);
  }
}


 ?>
