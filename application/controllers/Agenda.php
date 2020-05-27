<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Agenda extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model("M_Agenda");
    }

    function is_login()
    {
        if (!$this->session->has_userdata("user")) {
            redirect("login");
        }
    }

    public function getAll()
    {
        echo json_encode($this->M_Agenda->getAll());
    }

    public function create()
    {
        $this->is_login();
        $data = array(
            "anggota_id" => $this->session->user->id,
            "judul" => $this->input->post("judul"),
            "data" => $this->input->post("deskripsi"),
            "pelaksanaan" => $this->input->post("pelaksanaan"),
            "tempat" => $this->input->post("tempat"),
            "sarana" => $this->input->post("sarana"),
            "tanggal" => date('Y-m-d')
        );

        if ($this->M_Agenda->insert($data)) {
            echo "Berhasil menyimpan data";
        } else {
            echo "Gagal menyimpan data";
        }
    }

    public function update()
    {
        $this->is_login();
        $id = $this->input->post("id");
        $data = array(
            "judul" => $this->input->post("judul"),
            "data" => $this->input->post("deskripsi"),
            "pelaksanaan" => $this->input->post("pelaksanaan"),
            "tempat" => $this->input->post("tempat"),
            "sarana" => $this->input->post("sarana"),

        );

        if ($this->M_Agenda->update($id, $data)) {
            echo "Berhasil menyimpan data";
        } else {
            echo "Gagal menyimpan data";
        }
    }

    public function delete()
    {
        $this->is_login();
        $id = $this->input->post("id");
        if ($this->M_Agenda->delete($id)) {
            echo "Berhasil menghapus data";
        } else {
            echo "Gagal menghapus data";
        }
    }
}
