<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends MY_Controller {

    public function __construct() {
        parent::__construct([
            parent::MIDDLEWARE['GUEST'],
            parent::MIDDLEWARE['USER'],
            parent::MIDDLEWARE['ADMIN']
        ]);
    }

    public function index() {
        $this->load->model('M_Album');
        $this->load->model('M_Event');
        $this->load->model('M_Photo');

        //Get event data
        $data['events'] = $this->M_Event->get_all_events();

        

        //if album parameter
        $album = $this->uri->segment(3);
        $photo = $this->uri->segment(5);
        if(isset($photo)) {
            $data['guest']['current_album'] = $album;
            $data['guest']['photo'] = $this->M_Photo->get_photo($photo);
            $this->load->view('guest-photo-single',$data);
        }
        else if(isset($album)) {
            //get photos from album
            $data['guest']['current_album'] = $album;
            $data['guest']['description'] = $this->M_Album->get_description($album);
            $data['guest']['photos'] = $this->M_Photo->get_photo_by_album($album);
            $this->load->view('guest-album-single',$data);
        } else {
            //get albums
            $data['guest']['albums'] = $this->M_Album->get_all_album();
            $this->load->view('galeri',$data);    
        }


        
    }
}