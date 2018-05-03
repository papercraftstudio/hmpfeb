<?php 
class Admin extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_page');
		
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
	function index(){
		$this->data['title'] = "My Dashboard";
		$this->load->view('admin/v_admin');
	}

	function pages() {
		
		$this->data['title'] = "Pages";
		$this->data['pages'] = $this->m_page->get_all_pages();
		// $this->load->view('admin/list_page',$this->data);
		$this->load->view('admin/v_admin',$this->data);
	}
}?>