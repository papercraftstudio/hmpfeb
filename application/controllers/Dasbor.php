<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dasbor extends MY_Controller {

    public function __construct() {
        parent::__construct([
            parent::MIDDLEWARE['ADMIN']
        ]);
        $this->load->model('m_page');
        $this->load->model('m_event');
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

    public function edit_event() {
        $id = $this->input->get('id');
        $this->data['admin'] = $this->m_event->get_page($id);
        $this->load->view('admin-edit-event',$this->data);
    }

    public function add_event() {
        $this->data['admin'] = "";
        $this->load->view('admin-add-event',$this->data);
    }

    public function added_event() {
        $data = array(

          'title' => $this->input->post('title'),
          'content' => $this->input->post('content'),
          'url' => $this->input->post('url')

        );
        //update to db
        $this->m_event->insert($data);

        //load view
        redirect('dasbor/events');        
    }


    public function editted_page() {
        $data = array(

          'title' => $this->input->post('title'),
          'content' => $this->input->post('content')

        );

          $id = $this->input->post('id');

        //update to db
        $this->m_page->update($data,$id);

        //load view
        redirect('dasbor/page');
    }

    public function editted_event() {
        $data = array(

          'title' => $this->input->post('title'),
          'content' => $this->input->post('content'),
          'url' => $this->input->post('url')

        );

          $id = $this->input->post('id');

        //update to db
        $this->m_event->update($data,$id);

        //load view
        redirect('dasbor/events');
    }    

    public function events() {
         $data['admin'] = $this->m_event->get_all_pages();
        
        $this->load->view('admin-list-event',$data);
    }
}