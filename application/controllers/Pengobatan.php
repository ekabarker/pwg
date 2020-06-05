<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengobatan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("M_Anggota");
        $this->load->model("M_Artikel");
        $this->load->model("M_Agenda");
        $this->load->model("M_Kegiatan");
        $this->load->model("M_Pengobatan");
    }

    public function check_date()
    {
        $tanggal = $this->input->get("tanggal");
        $jadwal_terpakai = $this->M_Pengobatan->checkDate($tanggal);
        $jadwal = $this->M_Pengobatan->getAllJam();
        $free = [];
        foreach ($jadwal as $j) {
            $found = false;
            foreach ($jadwal_terpakai as $terpakai) {
                if ($terpakai->jam_id == $j->id) {
                    $found = true;
                    break;
                }
            }
            if (!$found) {
                $free[] = $j;
            }
        }

        echo json_encode($free);
    }

    public function create()
    {
        $data = [
            "tanggal" => $this->input->post("tanggal"),
            "jam_id" => $this->input->post("jam_id"),
            "deskripsi" => $this->input->post("deskripsi"),
            "anggota_id" => $this->session->user->id
        ];

        $this->M_Pengobatan->insert($data);

        echo true;
    }

    public function getAll()
    {
        echo json_encode($this->M_Pengobatan->getAll());
    }

    public function konfirmasi()
    {
        $id = $this->input->post("id");
        return $this->M_Pengobatan->update($id, [
            "status" => 1
        ]);
    }

    public function batalkan()
    {
        $id = $this->input->post("id");
        return $this->M_Pengobatan->update($id, [
            "status" => 2
        ]);
    }
}
