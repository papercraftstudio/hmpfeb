<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends MY_Controller {

    public function __construct() {
        parent::__construct([
            parent::MIDDLEWARE['GUEST'],
            parent::MIDDLEWARE['USER'],
            parent::MIDDLEWARE['ADMIN']
        ]);
    }

    public function index() {
        $this->load->model('M_Event');

        //Get event data
        $data['events'] = $this->M_Event->get_all_events();

        $this->load->view('galeri',$data);
    }
}