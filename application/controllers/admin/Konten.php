<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Konten extends CI_Controller
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

        $this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
        $this->db->join('user c','a.username=c.username','left');
        $this->db->order_by('tanggal', 'DESC');
        $konten = $this->db->get()->result_array();
        $data = array(
            'judul_halaman' => 'Halaman Konten',
            'kategori'      => $kategori,
            'konten'        => $konten
        );
        $this->template->load('template_admin', 'admin/index_konten', $data);
    }

    public function simpan()
    {
     
        $namafoto                   = date('YmdHis').'.jpg';
        $config['upload_path']      = 'assets/upload/konten/';
        $config['max_size']         = 6 * 1024 * 1024;
        $config['file_name']        = $namafoto;
        $config['allowed_types']    = '*';
        $this->load->library('upload', $config);
        if($_FILES['foto']['size'] >= 6 * 1024 * 1024){
            $this->session->set_flashdata('alert', '<div class="alert alert-danger" role="alert">UKURAN TERLALU BESAR NIII CHAN</div>');
            redirect('admin/konten');
        }elseif( ! $this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors());
        }else{
            $data = array('upload_data' => $this->upload->data());
        }


        $this->db->from('konten');
        $this->db->where('judul', $this->input->post('judul'));
        $jejocek = $this->db->get()->result_array();
        if ($jejocek <> NULL) {
            $this->session->set_flashdata('alert', '<div class="alert alert-danger" role="alert">Judul Konten Sudah Ada Nii Chann</div>');
            redirect('admin/konten');
        }
        $data = array(
            'judul'         => $this->input->post('judul'),
            'id_kategori'   => $this->input->post('id_kategori'),
            'keterangan'    => $this->input->post('keterangan'),
            'tanggal'       => date('Y-m-d'),
            'foto'          => $namafoto,
            'username'      => $this->session->userdata('username'),
            'slug'          => str_ireplace(' ','-',$this->input->post('judul')),
        );
        $this->db->insert('konten',$data);
        $this->session->set_flashdata('alert', '<div class="alert alert-primary" role="alert">Berhasil di tambah nii chan</div>');
        redirect('admin/konten');
    }

    public function hapus_data($id)
    {
        $filename = FCPATH.'/assets/upload/konten/'.$id;
            if(file_exists($filename)){
                unlink("./assets/upload/konten/".$id);
            }
        $where = array(
            'foto' => $id
        );
        $this->db->delete('konten', $where);
        $this->session->set_flashdata('alert', '<div class="alert alert-primary" role="alert">Berhasil di hapus nii chan</div>');
        redirect('admin/konten');
    }

    public function update()
    {
     
        $namafoto                   = $this->input->post('nama_foto');
        $config['upload_path']      = 'assets/upload/konten/';
        $config['max_size']         = 500 * 1024;
        $config['file_name']        = $namafoto;
        $config['overwrite']        = true;
        $config['allowed_types']    = '*';
        $this->load->library('upload', $config);
        if($_FILES['foto']['size'] >= 500 * 1024){
            $this->session->set_flashdata('alert', '<div class="alert alert-danger" role="alert">UKURAN TERLALU BESAR NIII CHAN</div>');
            redirect('admin/konten');
        }elseif( ! $this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors());
        }else{
            $data = array('upload_data' => $this->upload->data());
        }

        $data = array(
            'judul'         => $this->input->post('judul'),
            'id_kategori'   => $this->input->post('id_kategori'),
            'keterangan'    => $this->input->post('keterangan'),
            'slug'          => str_ireplace(' ','-',$this->input->post('judul')),
        );
        $where = array(
            'foto' => $this->input->post('nama_foto')
        );
        $this->db->update('konten',$data,$where);
        $this->session->set_flashdata('alert', '<div class="alert alert-primary" role="alert">Berhasil di update nii chan</div>');
        redirect('admin/konten');
    }
}
