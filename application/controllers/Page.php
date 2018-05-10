<?php
class Page extends CI_Controller {
  function __construct() {
      parent::__construct();
      $this->load->model('m_page');
  }

  function index() {
    $this->load->view('home');
  }

  function about() {
    $data['title'] = "About";
    $data['breadcrumb'] = "  <li><a href='#'>Home</a></li>
      <li><a href='#'>Page</a></li>
      <li>About</li>";

    $data['content'] = $this->m_page->get_page(1);;
    $this->load->view('single_page_header',$data);
    // $this->load->view('home');
    $this->load->view('single_page_footer');
  }


}
