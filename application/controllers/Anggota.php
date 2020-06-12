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
        $anggota = $this->M_Anggota->get($id)[0];
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

        $upload_gambar = $_FILES['gambar']['name'];

        if ($upload_gambar) {
            $config['upload_path']          = './assets/img/profile/';
            $config['allowed_types']        = 'jpg|png';
            $config['max_size']             = 2048;

            $this->load->library('upload', $config);
            if ($this->upload->do_upload('gambar')) {
                $gambar_lama = $anggota->gambar;
                if ($gambar_lama != 'default.jpg') {
                    unlink(FCPATH . 'assets/img/profile/' . $gambar_lama);
                }
                $data['gambar'] = $this->upload->data()['file_name'];
                $this->M_Anggota->update($id, $data);
                $this->session->set_flashdata('pesan', '<div class="alert alert-success text-center" role="alert">Profile Anda Berhasil di Update</div>');
                redirect('?page=profil');
            } else {
                $this->session->set_flashdata('error', '<div class="alert alert-danger text-center" role="alert">Profile Anda Gagal di Update</div>');
                redirect('?page=profil');
            }
        }

        if ($this->M_Anggota->update($id, $data)) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-success text-center" role="alert">Profile Anda Berhasil di Update</div>');
            redirect('?page=profil');
        } else {
        }
    }

    public function ubahPassword()
    {
        $this->is_login();
        $id = $this->input->post("id");
        $anggota = $this->M_Anggota->get($id)[0];

        $password_lama = $this->input->post("password");
        $password_baru = $this->input->post("new_password1");
        $password_baru2 = $this->input->post("new_password2");
        $user = $this->M_Anggota->get($id)[0];
        if ($user->password == md5($password_lama) && $password_baru == $password_baru2) {
            if ($this->M_Anggota->update($id, [
                'password' => md5($password_baru)
            ]))
                $this->session->set_flashdata('pesan', '<div class="alert alert-success text-center" role="alert">Berhasil Mengubah Password</div>');
            redirect('?page=profil');
        } else {
            $this->session->set_flashdata('error', '<div class="alert alert-danger text-center" role="alert">Gagal Mengubah Password</div>');
            redirect('?page=ubah_pass');
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
