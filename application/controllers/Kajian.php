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
    	$this->load->model('M_Kajian');
      
   }

   function index() {
      $id = $this->input->get('id');
      $data['guest'] = $this->M_Kajian->get_event($id);

      //Get event data
      $data['events'] = $this->M_Kajian->get_all_events();
      
      $this->load->view('single-page',$data);
   }

   function all() {
    $this->load->view('single-page',$data);
   }
}