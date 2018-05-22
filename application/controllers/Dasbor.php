<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dasbor extends MY_Controller {

    public function __construct() {
        parent::__construct([
            parent::MIDDLEWARE['ADMIN']
        ]);
        $this->load->model('m_page');
        $this->load->model('m_event');

        $this->load->model('m_kajian');
        $this->load->model('m_perkuliahan');

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
        $this->data['admin'] = $this->m_event->get_event($id);
        $this->load->view('admin-edit-event',$this->data);
    }

    public function add_event() {
        $this->data['admin'] = "";
        $this->load->view('admin-add-event',$this->data);
    }

    public function delete_event() {
        $id = $this->input->get('id');

        //delete data in db
        $this->m_event->delete($id);

        //load view
        redirect('dasbor/events');
    }

    public function add_kajian() {
        $this->data['admin'] = "";
        $this->load->view('admin-add-kajian',$this->data);
    }

    public function delete_kajian() {
        $id = $this->input->get('id');

        //delete data in db
        $this->m_kajian->delete($id);

        //load view
        redirect('dasbor/kajian');
    }

    public function added_event() {
        $data = array(

          'title' => $this->input->post('title'),
          'content' => $this->input->post('content'),
          'url' => $this->input->post('url'),
          'date' => date("Y-m-d H:i:s")

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
         $data['admin'] = $this->m_event->get_all_events();
        
        $this->load->view('admin-list-event',$data);
    }

    public function make_admin() {
        $email=$this->input->post('email');
        $this->user->make_admin($email);
        redirect('dasbor/pengguna');
    }

    public function make_user() {
        $email=$this->input->post('email');
        $this->user->make_user($email);
        redirect('dasbor/admin');

    }


    public function kajian() {
        $data['admin'] = $this->m_kajian->get_all_kajian();
        $this->load->view('admin-list-kajian',$data);
    }

    public function edit_kajian() {
        $id = $this->input->get('id');
        $this->data['admin'] = $this->m_kajian->get_kajian($id);
        $this->load->view('admin-edit-kajian',$this->data);
    }    

    public function added_kajian() {
        $data = array(

          'title' => $this->input->post('title'),
          'content' => $this->input->post('content'),

        );
        //update to db
        $this->m_kajian->insert($data);

        //load view
        redirect('dasbor/kajian');        
    }

    public function editted_kajian() {
        $data = array(

          'title' => $this->input->post('title'),
          'content' => $this->input->post('content'),
          

        );

          $id = $this->input->post('id');

        //update to db
        $this->m_kajian->update($data,$id);

        //load view
        redirect('dasbor/kajian');
    }  

    //galir
    public function galir() {
        $data['admin'] = $this->m_perkuliahan->list_galir();
        $this->load->view('admin-list-galir',$data);
    }

    public function list_edit_galir() {
        $id=$this->input->post('id');
        $data['admin'] = $this->m_perkuliahan->select_edit_galir($id);
        $this->load->view('admin-edit-galir',$data);
    }

    public function edit_galir() {
        $data['kode_matkul'] = $this->input->post('kode_matkul');
        $data['nama_matkul'] = $this->input->post('nama_matkul');
        $data['semester'] = $this->input->post('semester');
        $data['sks'] = $this->input->post('sks');
        $data['kosyarat'] = $this->input->post('kosyarat');
        $id = $this->input->post('id');

        $this->m_perkuliahan->update_galir($data,$id);

        redirect('dasbor/galir');
    }

    public function delete_galir() {
        $id= $this->input->post('id');
        $this->m_perkuliahan->delete_galir($id);

        redirect('dasbor/galir');
    }


    public function list_add_galir() {
        $this->data['admin'] = "";
        $this->load->view("admin-add-galir",$this->data);
    }

    public function add_galir() {
        $data['kode_matkul'] = $this->input->post('kode_matkul');
        $data['nama_matkul'] = $this->input->post('nama_matkul');
        $data['semester'] = $this->input->post('semester');
        $data['sks'] = $this->input->post('sks');
        $data['kosyarat'] = $this->input->post('kosyarat');

        $this->m_perkuliahan->add_galir($data);

        redirect('dasbor/galir');
    }

    //dosen
    public function dosen() {
        $data['admin'] = $this->m_perkuliahan->list_dosen();
        $this->load->view('admin-list-dosen',$data);
    }

    public function list_edit_dosen() {
        $id=$this->input->post('id');
        $data['admin'] = $this->m_perkuliahan->select_edit_dosen($id);
        $this->load->view('admin-edit-dosen',$data);
    }

    public function edit_dosen() {
        $data['nama'] = $this->input->post('nama');
        $data['alamat'] = $this->input->post('alamat');
        $data['matakuliah'] = $this->input->post('matakuliah');
        $data['gender'] = $this->input->post('gender');
        $data['dob'] = date("Y-m-d", strtotime($this->input->post('dob')));
        $id = $this->input->post('id');

        $this->m_perkuliahan->update_dosen($data,$id);

        redirect('dasbor/dosen');
    }

    public function delete_dosen() {
        $id= $this->input->post('id');
        $this->m_perkuliahan->delete_dosen($id);

        redirect('dasbor/dosen');
    }

    public function list_add_dosen() {
        $this->data['admin'] = "";
        $this->load->view("admin-add-dosen",$this->data);
    }

    public function add_dosen() {
        $data['nama'] = $this->input->post('nama');
        $data['alamat'] = $this->input->post('alamat');
        $data['matakuliah'] = $this->input->post('matakuliah');
        $data['gender'] = $this->input->post('gender');
        $data['dob'] = date("Y-m-d", strtotime($this->input->post('dob')));

        $this->m_perkuliahan->add_dosen($data);

        redirect('dasbor/dosen');
    }
}