<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model {

    function __construct() {
        $this->tableName = 'users';
        $this->primaryKey = 'id';
    }

    public function authenticate() {
        $login = @$this->session->userdata('login');
        $user = @$this->session->userdata('user');
        $role = @$this->session->userdata('role');
        if (isset($user)) {
            $query = $this->db->select('role')
                ->from($this->tableName)
                ->where(array('oauth_uid' => $user['id']))
                ->get();
            if ($query->num_rows() > 0) {
                $result = $query->row_array();
                if ($result['role'] != $role) {
                    $this->session->set_userdata('role', $result['role']);
                    redirect();
                } else {
                    $this->session->set_userdata('role', $role);
                }
            } else {
                if ($login == true) {
                    $this->session->sess_destroy();
                    $this->googleplus->revokeToken();
                    redirect();
                }
            }
        }
    }

    public function countAdmin() {
        $query = $this->db->select($this->primaryKey)
            ->from($this->tableName)
            ->where(array('role' => 'admin'))
            ->get();
        return $query->num_rows();
    }

    public function countUser() {
        $query = $this->db->select($this->primaryKey)
            ->from($this->tableName)
            ->where(array('role' => 'user'))
            ->get();
        return $query->num_rows();
    }

    public function selectAll($clause) {
        $query = $this->db->select('*')
            ->from($this->tableName)
            ->where($clause)
            ->get();
        return $query->result();
    }

    public function checkUser(array $data) {
        $this->db->select($this->primaryKey)
            ->from($this->tableName)
            ->where(array('oauth_uid' => $data['oauth_uid']));
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            $data['modified'] = date("Y-m-d H:i:s");
            $this->db->update($this->tableName, $data, array('id' => $result['id']));
            {
                $query = $this->db->select('role')
                    ->from($this->tableName)
                    ->where(array('id' => $result['id']))
                    ->get();
                if ($query->num_rows() > 0) {
                    $result = $query->row_array();
                    $this->session->set_userdata('role', $result['role']);
                } else {
                    $this->session->set_userdata('role', 'user');
                }
            }
            return true;
        } else {
            $data['created'] = date("Y-m-d H:i:s");
            $data['modified'] = date("Y-m-d H:i:s");
            $this->db->insert($this->tableName, $data);
            $this->db->insert_id();
            $this->session->set_userdata('role', 'user');
            return false;
        }
    }

    public function make_admin($email){
        $this->db->query("UPDATE users SET role='admin' where email = '$email'");
    }

    public function make_user($email){
        $this->db->query("UPDATE users SET role='user' where email = '$email'");
    }
}