<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kegiatan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("M_Kegiatan");
    }

    public function is_login()
    {
        if (!$this->session->has_userdata("user")) {
            redirect("login");
        }
    }
    public function getAll()
    {
        echo json_encode($this->M_Kegiatan->getAll());
    }
    public function create()
    {
        $this->is_login();
        $data = array(
            "anggota_id" => $this->session->user->id,
            "judul" => $this->input->post("judul"),
            "data" => $this->input->post("data"),
            "tanggal" => date('Y-m-d')
        );

        if ($this->M_Kegiatan->insert($data)) {
            echo "Berhasil menyimpan data";
        } else {
            echo "Gagal menyimpan data";
        }
    }

    public function delete()
    {
        $this->is_login();
        $id = $this->input->post("id");
        if ($this->M_Kegiatan->delete($id)) {
            echo "Berhail menghapus data";
        } else {
            echo "Gagal menghapus data";
        }
    }
}
