<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artikel extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model("M_Artikel");
    }

    function is_login()
    {
        if (!$this->session->has_userdata("user")) {
            redirect("login");
        }
    }

    public function getAll()
    {
        echo json_encode($this->M_Artikel->getAll());
    }

    public function create()
    {
        $this->is_login();
        $data = array(
            "anggota_id" => $this->session->user->id,
            "data" => $this->input->post("data"),
            "judul" => $this->input->post("judul"),
            "tanggal" => date('Y-m-d')
        );

        $filename = $this->generateRandomString() . '-' . date('Y-m-d');
        file_put_contents("artikel/" . $filename, $this->input->post("data"));
        $data["data"] = $filename;

        if ($this->M_Artikel->insert($data)) {
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

        $artikel = $this->M_Artikel->get($id)[0];
        $filename = $artikel->data;
        file_put_contents("artikel/" . $filename, $this->input->post("data"));

        if ($this->M_Artikel->update($id, $data)) {
            echo "Berhasil menyimpan data";
        } else {
            echo "Gagal menyimpan data";
        }
    }

    public function delete()
    {
        $this->is_login();
        $id = $this->input->post("id");
        if ($this->M_Artikel->delete($id)) {
            echo "Berhasil menghapus data";
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
