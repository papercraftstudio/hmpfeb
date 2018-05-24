<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PaginTest extends CI_Controller {

	function __construct()
  	{
    	parent::__construct();
    	$this->load->model('M_Kajian');
      
   }

   function index() {
   	$this->load->library("pagination");
   	$data["base_url"] = "http://economics-uksw.co.id/PaginTest/index";
    $data["per_page"] = 3;
    $data["num_links"] = 5;
    $data["total_rows"] = $this->db->get("m_kajian")->num_rows();

    $this->pagination->initialize($data);
    $data['query'] = $this->db->get("m_kajian",$data["per_page"],$this->uri->segment(1));

     $this->load->view('kajian-all',$data);
   }
	
}