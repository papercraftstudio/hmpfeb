<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends MY_Controller {

    public function __construct() {
        parent::__construct([
            parent::MIDDLEWARE['USER'],
            parent::MIDDLEWARE['ADMIN']
        ]);
    }

    public function index() {
        $this->load->view('profil');
    }
}