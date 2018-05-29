<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends MY_Controller {

  function __construct()
  {
    parent::__construct([
            parent::MIDDLEWARE['GUEST'],
            parent::MIDDLEWARE['USER'],
            parent::MIDDLEWARE['ADMIN']
        ]);
    	$this->load->model('M_Page');
      $this->load->model('M_Event');
   }

   function about_us() {
   		$this->data['guest'] = $this->M_Page->get_page(1);

      //Get event data
      $this->data['events'] = $this->M_Event->get_all_events();

   		$this->load->view('single-page',$this->data);
   }

   function visi_misi() {
      $data['guest'] = $this->M_Page->get_page(2);

      //Get event data
      $data['events'] = $this->M_Event->get_all_events();

      $this->load->view('single-page',$data);
   }

      function contact_us() {
      $data['guest'] = $this->M_Page->get_page(3);

      //Get event data
      $data['events'] = $this->M_Event->get_all_events();

      $this->load->view('single-page',$data);
   }

   function event() {
      
   }
}