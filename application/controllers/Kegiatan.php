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

        $filename = $this->generateRandomString() . '-' . date('Y-m-d');
        file_put_contents("kegiatan/" . $filename, $this->input->post("data"));
        $data["data"] = $filename;

        if ($this->M_Kegiatan->insert($data)) {
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
        );

        $kegiatan = $this->M_Kegiatan->get($id)[0];
        $filename = $kegiatan->data;
        file_put_contents("kegiatan/" . $filename, $this->input->post("data"));

        if ($this->M_Kegiatan->update($id, $data)) {
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

    function generateRandomString($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
