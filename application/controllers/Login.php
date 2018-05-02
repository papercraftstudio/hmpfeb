<?php
class Login extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('m_login');
  }

  function index()
  { 
    $data['title'] = "Login";
    
    $this->load->view('v_login',$data);
    
  }

  function login_action()
  {
    $username = $this->input->post('username');
    $password = $this->input->post('pass');
    $table = 'm_user';
    $where = array(
        'M_UserLogin' => $username,
        'M_UserPassword' => md5($password)
        );
    $cek = $this->m_login->cek_login($table,$where)->num_rows();
    
    if($cek > 0){
      $data_session = array(
        'nama' => $username,
        'status' => "login"
        );
      $this->session->set_userdata($data_session);
      redirect(base_url('admin/admin'));
    }else{
      echo "Username dan password salah !";
    }
  }

  function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}

  
}?>