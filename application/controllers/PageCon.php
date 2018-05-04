<?php

class PageCon extends CI_Controller {
  function __construct()
  {
    parent::__construct();
    $this->load->model('m_page');
  }

  function index() {

    $this->data['pages'] = $this->m_page->get_all_pages();
    $this->load->view('admin/list_page',$this->data);

  }

  function page() { //edit page
    $id = $this->input->get('id');
    $this->data['page'] = $this->m_page->get_page($id);
    $this->load->view('admin/edit_page',$this->data);
  }

  function delete() { //delete page
    $id = $this->input->get('id');
    $this->load->m_page->delete_page($id);
    $this->load->view('admin/list_page',$this->data);
  }

  function editted_page() {
    $data = array(

      'title' => $this->input->post('title'),
      'content' => $this->input->post('content')

    );

    $id = $this->input->post('id');

    //update to db
    $this->m_page->update($data,$id);

    //load view
    $this->load->view('admin/confirm_page',$data);
  }


}

 ?>
