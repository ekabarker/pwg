<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_JenisPengobatan extends CI_Model
{
    function getAll()
    {
        return $this->db->get("jenis_pengobatan")->result();
    }
}
