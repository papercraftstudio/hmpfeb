<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Galery extends MY_Controller {

  function __construct()
  {
    parent::__construct([
            parent::MIDDLEWARE['GUEST'],
            parent::MIDDLEWARE['USER'],
            parent::MIDDLEWARE['ADMIN']
        ]);
    	$this->load->model('M_galery');
      $this->load->model('M_Event');
   }

   function about_us() {
   		$this->data['guest'] = $this->M_galery->get_galery(1);

      //Get event data
      $this->data['events'] = $this->M_Event->get_all_events();

   		$this->load->view('single-galery',$this->data);
   }

   function visi_misi() {
   		$data['guest'] = $this->M_galery->get_galery(2);

      //Get event data
      $data['events'] = $this->M_Event->get_all_events();

   		$this->load->view('single-galery',$data);
   }

   function event() {
      
   }
}