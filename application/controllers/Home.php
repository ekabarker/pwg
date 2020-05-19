<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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

	public function index()
	{
        $this->is_login();
        $menu = "daftar_artikel";
        if($this->input->get("page")) {
            $menu = $this->input->get("page");
        }
        $footer = null;
		$this->load->view('v_home', ["menu" => $menu]);
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect("login");
    }
}
