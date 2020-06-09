<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anggota extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("M_Anggota");
        $this->load->library('form_validation');
    }

    function is_login()
    {
        if (!$this->session->has_userdata("user")) {
            redirect("login");
        }
    }

    public function getAll()
    {
        echo json_encode($this->M_Anggota->getAll());
    }

    public function update()
    {
        $this->is_login();
        $id = $this->input->post("id");
        $data = array(
            "nama" => $this->input->post("nama"),
            "tanggal_lahir" => $this->input->post("tanggal_lahir"),
            "tempat_lahir" => $this->input->post("tempat_lahir"),
            "alamat" => $this->input->post("alamat"),
            "no_tlp" => $this->input->post("no_tlp"),
            "agama" => $this->input->post("agama"),
            "jenis_kelamin" => $this->input->post("jk"),
            "username" => $this->input->post("username")
        );

        if ($this->M_Anggota->update($id, $data)) {
            echo "Berhasil menyimpan data";
        } else {
            echo "Gagal menyimpan data";
        }
    }

    public function ubahPassword()
    {
        $this->is_login();
        $id = $this->input->post("id");
        $data['user'] = $this->db->get_where('anggota', ['username' => $this->session->userdata('username')])->row_array();

        $this->form_validation->set_rules('password', 'Password', 'required|trim', [
            'required' => 'Password wajib diisi'
        ]);
        $this->form_validation->set_rules('new_password1', 'Password Baru', 'required|trim|min_length[8]|matches[new_password2]', [
            'required' => 'Password wajib diisi',
            'matches' => 'Password tidak cocok',
            'min_length' => ' Password minimal-8 karakter!'
        ]);
        $this->form_validation->set_rules('new_password2', ' Konfirmasi Password Baru', 'required|trim|min_length[8]|matches[new_password1]');

        if ($this->form_validation->run() == false) {
            redirect('?page=edit_profil');
        } else {
        }
    }

    public function delete()
    {
        $this->is_login();
        $id = $this->input->post("id");
        if ($this->M_Anggota->delete($id)) {
            echo "Berhasil menghapus data";
        } else {
            echo "Gagal menghapus data";
        }
    }
}
