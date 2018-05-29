<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Autentikasi extends MY_Controller {

    function __construct() {
        parent::__construct([
            parent::MIDDLEWARE['USER'],
            parent::MIDDLEWARE['ADMIN']
        ]);
    }

    public function keluar() {
        $this->session->sess_destroy();
        $this->googleplus->revokeToken();
        redirect();
    }
}