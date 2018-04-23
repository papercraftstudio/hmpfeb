<?php

class Page extends CI_Controller {
  function __construct()
  {
    parent::__construct();
    $this->load->model('m_page');
  }

  function insert() {
    $this->load->view('insert_page');
  }


}

 ?>
