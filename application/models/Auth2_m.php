<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth2_m extends CI_Model
{
    public function get_where($table, $where)
    {
        return $this->db->get_where($table, $where);
    }
}
