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
        $this->load->model('M_Album');

        //Get event data
        $data['guest'] = $this->M_Album->get_all_album();

        $this->load->view('galeri',$data);
    }
}