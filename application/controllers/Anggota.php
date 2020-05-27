<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anggota extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("M_Anggota");
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
            "agama" => $this->input->post("agama"),
            "jenis_kelamin" => $this->input->post("jk"),
            "username" => $this->input->post("username"),

        );

        if ($this->M_Anggota->update($id, $data)) {
            echo "Berhasil menyimpan data";
        } else {
            echo "Gagal menyimpan data";
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
