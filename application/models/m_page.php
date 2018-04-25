<?php

class M_Page extends CI_Model {

  function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  function update($data,$id) {
    $this->db->where('id',$id);
    $this->db->update('m_page',$data);
  }

  function get_all_pages() {
    $query=$this->db->get('m_page');
    $result = $query->result();
    return($result);
  }

  function get_page($id) {

    $this->db->where('id',$id);
    $page = $this->db->get('m_page')->row();
    //
    //
    // $data = array(
    //   'id' => $page->id,
    //   'title' => $page->title,
    //   'content' => $page->content
    // );
    //
    return $page;
  }
}


 ?>
