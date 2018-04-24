<?php

class Page extends CI_Controller {
  function __construct()
  {
    parent::__construct();
    $this->load->model('m_page');
  }

  function index() {

    $this->data['pages'] = $this->m_page->get_all_pages();
    $this->load->view('page/list_page',$this->data);

  }

  function edit() {
    $this->load->view('page/edit_page');
  }

  function editted() {
    $data = array(
      'id' => NULL,
      'title' => $this->input->post('title'),
      'content' => $this->input->post('content')

    );

    //update to db
    // $this->db->insert($db);

    //load view
    $this->load->view('page/confirm_page',$data);
  }


}

 ?>
