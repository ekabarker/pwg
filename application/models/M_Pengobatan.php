<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Pengobatan extends CI_Model
{
    function getAll()
    {
        return $this->db->select("pengobatan.id as id, tanggal, jam, deskripsi, anggota.nama as nama_anggota, tempat_lahir, tanggal_lahir, alamat, no_tlp, status")
            ->from("pengobatan")
            ->join("anggota", "pengobatan.anggota_id = anggota.id")
            ->join("jam_pengobatan", "pengobatan.jam_id = jam_pengobatan.id")
            ->get()->result();
    }

    function get($id)
    {
        return $this->db->select("pengobatan.id as id, tanggal, jam, deskripsi, anggota.nama as nama_anggota,tempat_lahir, tanggal_lahir, alamat, no_tlp, status")
            ->from("pengobatan")
            ->join("anggota", "pengobatan.anggota_id = anggota.id")
            ->join("jam_pengobatan", "pengobatan.jam_id = jam_pengobatan.id")
            ->where("pengobatan.id", $id)
            ->get()->result();
    }

    function checkDate($date)
    {
        $is_libur = $this->db->select("*")
            ->from("libur")
            ->where("tanggal", $date)
            ->get()->result();
        if (count($is_libur) >= 1) {
            return $this->db->select("id as jam_id")->from("jam_pengobatan")->get()->result();
        }
        return $this->db->select("*")
            ->from("pengobatan")
            ->join("jam_pengobatan", "pengobatan.jam_id = jam_pengobatan.id")
            ->where("tanggal", $date)
            ->get()->result();
    }

    function getAllJam()
    {
        return $this->db->get("jam_pengobatan")->result();
    }

    function insert($pengobatan)
    {
        return $this->db->insert("pengobatan", $pengobatan);
    }

    function update($id, $pengobatan)
    {
        return $this->db->where("id", $id)
            ->update("pengobatan", $pengobatan);
    }

    function getMe($userid)
    {
        return $this->db->select("*")
            ->from("pengobatan")
            ->join("jam_pengobatan", "pengobatan.jam_id = jam_pengobatan.id")
            ->where("anggota_id", $userid)
            ->where("status", 0)
            ->get()->result();
    }
}
