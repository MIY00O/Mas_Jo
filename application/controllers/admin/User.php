<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_modal');
        if ($this->session->userdata('level') <> 'admin') {
            redirect('auth');
        }
    }

    public function index()
    {
        $this->db->from('user');
        $this->db->order_by('nama', 'ASC');
        $user = $this->db->get()->result_array();
        $data = array(
            'judul_halaman' => 'Data Pengguna',
            'user'          => $user
        );
        $this->template->load('template_admin', 'admin/index_user', $data);
    }

    public function simpan()
    {
        $this->db->from('user');
        $this->db->where('username', $this->input->post('username'));
        $jejocek = $this->db->get()->result_array();
        if ($jejocek <> NULL) {
            $this->session->set_flashdata('alert', '<div class="alert alert-danger" role="alert">Username Sudah Ada Nii Chann</div>');
            redirect('admin/user');
        }
        $this->User_modal->simpan();
        $this->session->set_flashdata('alert', '<div class="alert alert-primary" role="alert">Berhasil di tambah nii chan</div>');
        redirect('admin/user');
    }

    public function hapus_data($id)
    {
        $where = array(
            'id_user' => $id
        );
        $this->db->delete('user', $where);
        $this->session->set_flashdata('alert', '<div class="alert alert-primary" role="alert">Berhasil di hapus nii chan</div>');
        redirect('admin/user');
    }

    public function update()
    {
        $this->User_modal->update();
        $this->session->set_flashdata('alert', '<div class="alert alert-primary" role="alert">Berhasil di update nii chan</div>');
        redirect('admin/user');
    }
}
