<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Perkuliahan extends MY_Controller {

    public function __construct() {
        parent::__construct([
            parent::MIDDLEWARE['ADMIN']
        ]);
        $this->load->model('m_perkuliahan');
        $this->load->helper('form');
    }

    public function list_galir() {
        $data = $this->m_perkuliahan->list_galir();
        $this->load->view('admin-list-galir',$data);
    }
}