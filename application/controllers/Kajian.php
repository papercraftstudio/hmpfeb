<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kajian extends MY_Controller {

  function __construct()
  {
    parent::__construct([
            parent::MIDDLEWARE['GUEST'],
            parent::MIDDLEWARE['USER'],
            parent::MIDDLEWARE['ADMIN']
        ]);
    	$this->load->model('M_Kajian');
      
   }

   function index() {
      $id = $this->input->get('id');
      $data['guest'] = $this->M_Kajian->get_kajian($id);

      //Get event data
      $data['events'] = $this->M_Kajian->get_all_kajian();
      
      $this->load->view('single-page',$data);
   }

   function all() {
    $this->load->library("pagination");
    $this->load->model('M_Event');
    //Get event data
      $data['events'] = $this->M_Event->get_all_events();
    
    //pagin config
    $data["base_url"] = "http://economics-uksw.co.id/kajian/all/index";
    $data["per_page"] = 3;
    $data["num_links"] = 5;
    $data["total_rows"] = $this->db->get("m_kajian")->num_rows();

    //pagin config customize
    $data['full_tag_open'] = '<ul class="pagination pagination-sm">';
    $data['full_tag_close'] = '</ul>';
    $data['num_tag_open'] = '<li class="page-item">';
    $data['num_tag_close'] = '</li>';
    $data['attributes'] = array('class' => 'page-link');
    //prev
    $data['prev_link'] = 'Previous';
    $data['prev_tag_open'] = '<li class="page-item">';
    $data['prev_tag_close'] = '</li>';
    //next
    $data['next_link'] = 'Next';
    $data['prev_tag_open'] = '<li class="page-item">';
    $data['prev_tag_close'] = '</li>';
    //current
    $data['cur_tag_open'] = '<li class="page-item disabled"><a href="" class="page-link">';
    $data['cur_tag_close'] = '</a></li>';


    $this->pagination->initialize($data);
    $data['guest'] = $this->db->get("m_kajian",$data["per_page"],$this->uri->segment(3));
    $data['guest']->pagin = $this->pagination->create_links();

     $this->load->view('guest-list-kajian',$data);
   }

   function all2() {
    //Get event data
      $data['events'] = $this->M_Kajian->get_all_kajian();
    
  $this->load->library("pagination");
    $data["base_url"] = "http://economics-uksw.co.id/kajian/all2/index";
    $data["per_page"] = 3;
    $data["num_links"] = 5;
    $data["total_rows"] = $this->db->get("m_kajian")->num_rows();

    $this->pagination->initialize($data);
    $data['guest'] = $this->db->get("m_kajian",$data["per_page"],$this->uri->segment(3));
    $data['guest']->pagin = $this->pagination->create_links();

     $this->load->view('guest-list-kajian2',$data);
   }

   function p() {
    $data['guest']['o'] = $this->uri->segment(3);
    $this->load->view('guest-pagin-kajian',$data);
   }
}