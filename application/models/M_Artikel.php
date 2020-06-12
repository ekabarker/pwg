<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Artikel extends CI_Model
{
    function getAll()
    {
        return $this->db->select(["id", "judul", "sub_judul", "tanggal"])
            ->get("artikel")->result();
    }

    function get($id)
    {
        return $this->db->where("id", $id)
            ->get("artikel")->result();
    }

    function insert($artikel)
    {
        return $this->db->insert("artikel", $artikel);
    }

    function update($id, $data)
    {
        return $this->db->where("id", $id)
            ->update("artikel", $data);
    }

    function delete($id)
    {
        return $this->db->where("id", $id)
            ->delete("artikel");
    }
}
