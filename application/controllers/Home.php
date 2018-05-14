<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

    public function __construct() {
        parent::__construct([
            parent::MIDDLEWARE['GUEST'],
            parent::MIDDLEWARE['USER'],
            parent::MIDDLEWARE['ADMIN']
        ]);
        $this->load->model('m_event');
    }

    public function index() {
        if (isset($_GET['code']) && $this->session->userdata('login') == false) {
            $this->googleplus->getAuthenticate();
            $user_data = $this->googleplus->getUserInfo();
            $user['oauth_uid'] = $user_data['id'];
            $user['email'] = $user_data['email'];
            $user['first_name'] = $user_data['given_name'];
            $user['last_name'] = empty($user_data['family_name']) ? null : ($user_data['family_name'] ?? null);
            $user['gender'] = $user_data['gender'] ?? null;
            if ($user['gender'] != null)
                $user['gender'] = ($user['gender'] == 'male')
                    ? 'Pria'
                    : (($user['gender'] == 'female')
                        ? 'Wanita'
                        : null
                    );
            $user['picture_url'] = $user_data['picture'] ?? null;
            $this->user->checkUser($user);
            $this->session->set_userdata('login', true);
            $this->session->set_userdata('user', $user_data);
            redirect();
        }
        //Get event data
        $data['events'] = $this->m_event->get_all_events();

        $this->load->view('home',$data);
    }
}