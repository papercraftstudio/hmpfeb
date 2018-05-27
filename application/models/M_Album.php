<?php

class M_Album extends CI_Model {

  function __construct()
  {
    parent::__construct();
    $this->load->database();
  }


  function get_all_album() {
    $query=$this->db->get('m_album');
    $result = $query->result();
    return($result);
  }

  function get_album($album) {

    $this->db->where('title',$album);
    $page = $this->db->get('m_album')->row();
    return $page;
  }

  function update($data,$id) {
    $this->db->where('id',$id);
    $this->db->update('m_album',$data);
  }

  function insert($data) {
    $this->db->insert('m_album',$data);
  }

  function delete($id) {
    $this->db->where('id',$id);
    $this->db->delete('m_album');
  }


}
 ?>
