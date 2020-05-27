<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("M_Anggota");
        $this->load->model("M_Artikel");
        $this->load->model("M_Agenda");
        $this->load->model("M_Kegiatan");
    }

    function is_login()
    {
        if (!$this->session->has_userdata("user")) {
            redirect("login");
        }
    }

    public function index()
    {
        $this->is_login();
        $menu = "daftar_artikel";
        $tampil = "";

        if ($this->input->get("page")) {
            $menu = $this->input->get("page");
        }
        if ($this->input->get("tampil")) {
            $tampil = $this->input->get("tampil");
        }
        $footer = null;
        $this->load->view('v_home', ["menu" => $menu, "tampil" => $tampil]);
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect("login");
    }
}
