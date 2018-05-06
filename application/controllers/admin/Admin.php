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


}?>
