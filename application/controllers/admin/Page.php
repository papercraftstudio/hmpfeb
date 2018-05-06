<?php

class Page extends CI_Controller {
function pages() {

  $this->data['title'] = "Pages";
  $this->data['pages'] = $this->m_page->get_all_pages();
  // $this->load->view('admin/list_page',$this->data);
  $this->load->view('admin/v_admin',$this->data);
}

function edit_page() {
  $id = $this->input->get('id');
  $this->data['page'] = $this->m_page->get_page($id);
  $this->load->view('admin/edit_page',$this->data);
}

}
