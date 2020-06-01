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
            redirect("home?tampil=artikel");
        } else {
            $this->session->set_flashdata('error', "<div class='alert alert-danger'>Username atau Password salah</div>");
            redirect("login");
        }
    }

    public function registrasi()
    {

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => 'Nama wajib diisi!'
        ]);
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required|trim', [
            'required' => 'Tanggal lahir wajib diisi!'
        ]);
        $this->form_validation->set_rules('tempat_lahir', 'Tempat lahir', 'required|trim', [
            'required' => 'Tempat lahir wajib diisi!'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim', [
            'required' => 'Alamat wajib diisi!'
        ]);
        $this->form_validation->set_rules('no_tlp', 'Nomor Telepon', 'required|trim', [
            'required' => 'Nomor Telepon wajib diisi!'
        ]);
        $this->form_validation->set_rules('agama', 'agama', 'required|trim', [
            'required' => 'Agama wajib diisi!'
        ]);
        $this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'required|trim', [
            'required' => 'Jenis kelamin wajib diisi!'
        ]);
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[anggota.username]', [
            'required' => 'Username wajib diisi',
            'is_unique' => 'Username ini sudah digunakan'
        ]);
        /**$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[anggota.email]', [
            'is_unique' => 'Email ini Sudah Pernah digunakan'
        ]);**/
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]', [
            'required' => 'Password wajib diisi',
            'matches' => 'Password tidak cocok',
            'min_length' => ' Password minimal-8 karakter!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|min_length[8]|matches[password1]');

        if ($this->form_validation->run() == false) {

            $this->load->view('v_registrasi');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'tanggal_lahir' => htmlspecialchars($this->input->post('tanggal_lahir', true)),
                'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir', true)),
                'alamat' => htmlspecialchars($this->input->post('alamat', true)),
                'agama' => htmlspecialchars($this->input->post('agama', true)),
                'no_tlp' => htmlspecialchars($this->input->post('no_tlp', true)),
                'jenis_kelamin' => htmlspecialchars($this->input->post('jenis_kelamin', true)),
                'username' => htmlspecialchars($this->input->post('username', true)),
                'password' => md5($this->input->post('password1')),
                'role' => 'anggota',
                'gambar' => 'default.jpg',
                'tgl_buat' => date('y-m-d')
            ];

            $this->M_Anggota->insert($data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Akun Anda Berhasil dibuat silakan Login </div>');
            redirect('login/index');
        }
    }
}
