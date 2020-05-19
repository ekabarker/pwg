<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Anggota extends CI_Model
{
    function getAll()
    {
        return $this->db->get("anggota")->result();
    }

    function cekLogin($username, $password)
    {
        return $this->db->where("username", $username)
            ->where("password", md5($password))
            ->get("anggota")
            ->result();
    }

    function insert($data)
    {
        return $this->db->insert("anggota", $data);
    }
}
