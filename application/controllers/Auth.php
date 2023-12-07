<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = array(
            'judul_halaman' => 'Login'
        );
        $this->load->view('login', $data);
    }


    public function logout()
    {
        $this->session->sess_destroy();
        redirect('home');
    }


    public function login()
    {
        $usernamae  = $this->input->post('username');
        $password   = md5($this->input->post('password'));
        $this->db->from('user');
        $this->db->where('username', $this->input->post('username'));
        $jejocek = $this->db->get()->row();
        if ($jejocek == NULL) {
            $this->session->set_flashdata('alert', '<div class="alert alert-danger" role="alert">Username Tidak Ada Nii Chann</div>');
            redirect('auth');
        } else if ($password == $jejocek->password) {
            $data = array(
                'id_user'  => $jejocek->id_user,
                'nama'     => $jejocek->nama,
                'username' => $jejocek->username,
                'level'    => $jejocek->level,
            );
            $this->session->set_userdata($data);
            redirect('admin/home');
        } else {
            $this->session->set_flashdata('alert', '<div class="alert alert-danger" role="alert">Password Tidak Ada Nii Chann</div>');
            redirect('auth');
        }
    }
}
