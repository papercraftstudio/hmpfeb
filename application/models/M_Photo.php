<?php

class M_Photo extends CI_Model {

  function __construct()
  {
    parent::__construct();
    $this->load->database();
  }


  function get_all_photos() {
    $query=$this->db->get('m_photo');
    $result = $query->result();
    return($result);
  }

  function get_photo($id) {
    
    $this->db->where('id',$id);
    $page = $this->db->get('m_photo')->row();

    return $page;
  }

  function get_file_name($id) {
    $query = $this->db->get('m_photo');
    $ret = $query->row();
    return $ret->file_name;
  }

  function get_photo_by_album($album) {

    $query = $this->db->select("*")->from("m_photo")->where("album",$album)->get();
    //var_dump($query->result());
    return($query->result());
  }

  function update($data,$id) {
    $this->db->where('id',$id);
    $this->db->update('m_photo',$data);
  }

  function delete($id) {
    $this->db->where('id',$id);
    $this->db->delete('m_photo');
  }

  function insert($data) {
    $this->db->insert('m_photo',$data);
  }

  function select_banner() {
    $query=$this -> db -> get_where('m_photo', array('url !=' => ''));
    return($query->result());
  }


}
 ?>
