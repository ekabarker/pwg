<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Agenda extends CI_Model
{
    function getAll()
    {
        return $this->db->select(["id", "judul", "pelaksanaan"])
            ->get("agenda")->result();
    }

    function get($id)
    {
        return $this->db->where("id", $id)
            ->get("agenda")->result();
    }

    function insert($agenda)
    {
        return $this->db->insert("agenda", $agenda);
    }

    function update($id, $data)
    {
        return $this->db->where("id", $id)
            ->update("agenda", $data);
    }

    function delete($id)
    {
        return $this->db->where("id", $id)
            ->delete("agenda");
    }
}
