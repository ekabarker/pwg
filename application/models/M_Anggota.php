<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Anggota extends CI_Model
{
    function getAll()
    {
        return $this->db->get("anggota")->result();
    }

    function get($id)
    {
        return $this->db->where("id", $id)
            ->get("anggota")->result();
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

    function update($id, $data)
    {
        return $this->db->where("id", $id)
            ->update("anggota", $data);
    }

    function delete($id)
    {
        return $this->db->where("id", $id)
            ->delete("anggota");
    }
}
