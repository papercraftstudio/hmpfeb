<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Perkuliahan extends MY_Controller {

    public function __construct() {
        parent::__construct([
            parent::MIDDLEWARE['GUEST'],
            parent::MIDDLEWARE['USER'],
            parent::MIDDLEWARE['ADMIN']
        ]);
        $this->load->model('m_perkuliahan');
        $this->load->helper('form');
    }

    public function index() {
        redirect('perkuliahan/galir');
    }

    public function galir() {
        $data['guest'] = $this->m_perkuliahan->list_galir();
        $this->load->view('galir',$data);
    }

    public function dosen() {
        $data['guest'] = $this->m_perkuliahan->list_dosen();
        $this->load->view('dosen',$data);
    }
}