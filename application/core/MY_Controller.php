<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    const MIDDLEWARE = [
        'GUEST' => 0,
        'USER' => 1,
        'ADMIN' => 2
    ];

    public function __construct(array $middleware) {
        parent::__construct();
        $this->load->model('user');
        $this->user->authenticate();
        $guest = self::MIDDLEWARE['GUEST'];
        $user = self::MIDDLEWARE['USER'];
        $admin = self::MIDDLEWARE['ADMIN'];
        $session = @$this->session->userdata('login');
        $data = @$this->session->userdata('user');
        $role = @$this->session->userdata('role');
        if (!in_array($guest, $middleware)) {
            if (!in_array($user, $middleware)) {
                if (!in_array($admin, $middleware)) {
                    show_404();
                } else {
                    if ($session == true && isset($data) && isset($role)) {
                        if (in_array($role, ['superuser', 'admin', 'user'])) {
                            if ($role != 'superuser' && $role != 'admin') show_404();
                        } else {
                            show_404();
                        }
                    }
                }
            } else {
                if ($session == false) show_404();
            }
            if (in_array($admin, $middleware)) {
                if ($session == false) show_404();
            }
        }
        $data = [
            'email' => $data['email'],
            'first_name' => $data['given_name'],
            'last_name' => empty($data['family_name']) ? null : ($data['family_name'] ?? null),
            'gender' => ($data['gender'] ?? null),
            'picture_url' => ($data['picture'] ?? null)
        ];
        if ($data['gender'] != null)
            $data['gender'] = ($data['gender'] == 'male')
                ? 'Pria'
                : (($data['gender'] == 'female')
                    ? 'Wanita'
                    : null
                );
        $vars['user'] = $data;
        $vars['google_login_url'] = $this->googleplus->loginURL();
        $this->load->vars($vars);
    }
}