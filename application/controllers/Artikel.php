<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("M_Anggota");
        $this->load->model("M_Artikel");
    }

    function is_login()
    {
        if(!$this->session->has_userdata("user")) {
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
            "tanggal" => date('Y-m-d'),
            "jenis" => "artikel"
        );

        if($this->M_Artikel->insert($data)) {
            echo "Berhasil menyimpan data";
        } else {
            echo "Gagal menyimpan data";
        }
    }
}
