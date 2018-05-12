<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dasbor extends MY_Controller {

    public function __construct() {
        parent::__construct([
            parent::MIDDLEWARE['ADMIN']
        ]);
        $this->load->model('m_page');
        $this->load->helper('form');
    }

    public function index() {
        $vars['total_admin'] = $this->user->countAdmin();
        $vars['total_user'] = $this->user->countUser();
        $this->load->view('dasbor', $vars);
    }

    public function admin() {
        $vars['admin'] = $this->user->selectAll(['role' => 'admin']);
        $this->load->view('admin-dasbor', $vars);
    }

    public function pengguna() {
        $vars['user'] = $this->user->selectAll(['role' => 'user']);
        $this->load->view('pengguna-dasbor', $vars);
    }

    public function page() {
        $data['admin'] = $this->m_page->get_all_pages();
        
        $this->load->view('admin-list-page',$data);
    }

    public function edit_page() {
        $id = $this->input->get('id');
        $this->data['admin'] = $this->m_page->get_page($id);
        $this->load->view('admin-edit-page',$this->data);
    }

    public function editted_page() {
        $data = array(

          'title' => $this->input->post('title'),
          'content' => $this->input->post('content')

        );
        }
}