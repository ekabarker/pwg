<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Kegiatan extends CI_Model
{
    function getAll()
    {
        return $this->db->select(["id", "judul", "tanggal"])
            ->get("kegiatan")->result();
    }

    function get($id)
    {
        return $this->db->where("id", $id)
            ->get("kegiatan")->result();
    }

    function insert($kegiatan)
    {
        return $this->db->insert("kegiatan", $kegiatan);
    }

    function update($id, $data)
    {
        return $this->db->where("id", $id)
            ->update("kegiatan", $data);
    }

    function delete($id)
    {
        return $this->db->where("id", $id)
            ->delete("kegiatan");
    }
}
