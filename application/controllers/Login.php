<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("M_Anggota");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view("v_login");
    }

    public function cekLogin()
    {
        $username = $this->input->post("username");
        $password = $this->input->post("password");

        $user = $this->M_Anggota->cekLogin($username, $password);
        if ($user) {
            $this->session->set_userdata("user", $user[0]);
            redirect("home");
        } else {
            $this->session->set_flashdata('error', "<div class='alert alert-danger'>Username atau Password salah</div>");
            redirect("login");
        }
    }

    public function registrasi()
    {

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required|trim');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat lahir', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('agama', 'agama', 'required|trim');
        $this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        /**$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[anggota.email]', [
            'is_unique' => 'Email ini Sudah Pernah digunakan'
        ]);**/
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]', [
            'matches' => 'password dont match!',
            'min_length' => ' password to short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|min_length[8]|matches[password1]');

        if ($this->form_validation->run() == false) {

            //$data['judul'] = 'Registrasi';
            //$this->load->view('templates/auth_header', $data);
            $this->load->view('v_registrasi');
            //$this->load->view('templates/auth_footer');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'tanggal_lahir' => htmlspecialchars($this->input->post('tanggal_lahir', true)),
                'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir', true)),
                'alamat' => htmlspecialchars($this->input->post('alamat', true)),
                'agama' => htmlspecialchars($this->input->post('agama', true)),
                'jenis_kelamin' => htmlspecialchars($this->input->post('jenis_kelamin', true)),
                'username' => htmlspecialchars($this->input->post('username', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role' => 'admin'

            ];

            $this->db->insert('anggota', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> SELAMAT! Akun Anda Berhasil dibuat. Silakan Login </div>');
            redirect('login/index');
        }
    }
}
