<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Agenda extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model("M_Agenda");
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

        $filename = $this->generateRandomString() . '-' . date('Y-m-d');
        file_put_contents("agenda/" . $filename, $this->input->post("deskripsi"));
        $data["data"] = $filename;

        $filename = $this->generateRandomString() . '-' . date('Y-m-d');
        file_put_contents("agenda/sarana/" . $filename, $this->input->post("sarana"));
        $data["sarana"] = $filename;


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

        $filename = $this->generateRandomString() . "-" . date('y-m-d');
        file_put_contents("agenda/" . $filename, $this->input->post("deskripsi"));
        $data["data"] = $filename;

        $filename = $this->generateRandomString() . "-" . date('y-m-d');
        file_put_contents("agenda/sarana/" . $filename, $this->input->post("sarana"));
        $data["sarana"] = $filename;

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

    public function send_email()
    {
        $id = $this->input->post('id');
        $url = $this->input->post('url');
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'eka.supartawan17@gmail.com', // email gmail
            'smtp_pass' => 'jkl48ghzsf24', // password gmail
            'mailtype'  => 'html', 
            'charset'   => 'iso-8859-1'
        );
        $this->load->library('email', $config);
       
        
        
        $users = $this->M_Anggota->getAll();
        foreach($users as $user) {
            if($user->role == "anggota") {
                $this->email->set_newline("\r\n");
                $this->email->from('eka.supartawan17@gmail.com', 'Admin');
                $this->email->to($user->email);
                $this->email->subject("Ada Agenda");
                $this->email->message('Ada agenda baru, lihat disini '.$url);  
                $result = $this->email->send(); 
            }
            
        }

        echo $this->email->print_debugger();
        
    }
}
