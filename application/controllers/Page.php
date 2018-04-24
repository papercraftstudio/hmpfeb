<?php

class Page extends CI_Controller {
  function __construct()
  {
    parent::__construct();
    $this->load->model('m_page');
  }

  function edit() {
    $this->load->view('page/edit_page');
  }

  function editted() {
    $data = array(
      'title' => $this->input->post('title'),
      'content' => $this->input->post('content')

    );

    $this->load->view('page/confirm_page',$data);
  }


}

 ?>
