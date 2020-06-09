<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Libur extends CI_Model
{
    function getAll()
    {
        return $this->db->get("libur")->result();
    }

    function get($id)
    {
        return $this->db->where("id", $id)
            ->get("libur")->result();
    }

    function insert($libur)
    {
        return $this->db->insert("libur", $libur);
    }

    function update($id, $data)
    {
        return $this->db->where("id", $id)
            ->update("libur", $data);
    }

    function delete($id)
    {
        return $this->db->where("id", $id)
            ->delete("libur");
    }
}
