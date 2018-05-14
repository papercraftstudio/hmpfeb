<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends MY_Controller {

  function __construct()
  {
    parent::__construct([
            parent::MIDDLEWARE['GUEST'],
            parent::MIDDLEWARE['USER'],
            parent::MIDDLEWARE['ADMIN']
        ]);
    	$this->load->model('M_Event');
      
   }

   function about_us() {
   		$this->data['guest'] = $this->M_Page->get_page(1);
   		$this->load->view('single-page',$this->data);
   }

   function visi_misi() {
   		$data['guest'] = $this->M_Page->get_page(2);
   		$this->load->view('single-page',$data);
   }



   function index() {
      $id = $this->input->get('id');
      $data['guest'] = $this->M_Event->get_event($id);

      //Get event data
      $data['events'] = $this->M_Event->get_all_events();
      
      $this->load->view('single-page',$data);
   }
}