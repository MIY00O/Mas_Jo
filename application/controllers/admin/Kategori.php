<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('level')==NULL) {
            redirect('auth');
        }
    }

    public function index()
    {
        $this->db->from('kategori');
        $this->db->order_by('nama_kategori', 'ASC');
        $kategori = $this->db->get()->result_array();
        $data = array(
            'judul_halaman' => 'Konten Kategori',
            'kategori'      => $kategori
        );
        $this->template->load('template_admin', 'admin/index_kategori', $data);
    }

    public function simpan()
    {
        $this->db->from('kategori');
        $this->db->where('nama_kategori', $this->input->post('nama_kategori'));
        $jejocek = $this->db->get()->result_array();
        if ($jejocek <> NULL) {
            $this->session->set_flashdata('alert', '<div class="alert alert-danger" role="alert">Kategori Sudah Ada Nii Chann</div>');
            redirect('admin/kategori');
        }
        $data = array(
            'nama_kategori' => $this->input->post('nama_kategori')
        );
        $this->db->insert('kategori',$data);
        $this->session->set_flashdata('alert', '<div class="alert alert-primary" role="alert">Berhasil di tambah nii chan</div>');
        redirect('admin/kategori');
    }

    public function hapus_data($id)
    {
        $where = array(
            'id_kategori' => $id
        );
        $this->db->delete('kategori', $where);
        $this->session->set_flashdata('alert', '<div class="alert alert-primary" role="alert">Berhasil di hapus nii chan</div>');
        redirect('admin/kategori');
    }

    public function update()
    {
        $where = array(
            'id_kategori' => $this->input->post('id_kategori')
        );
        $data = array(
            'nama_kategori' => $this->input->post('nama_kategori')
        );
        $this->db->update('kategori',$data,$where);
        $this->session->set_flashdata('alert', '<div class="alert alert-primary" role="alert">Berhasil di update nii chan</div>');
        redirect('admin/kategori');
    }
}
