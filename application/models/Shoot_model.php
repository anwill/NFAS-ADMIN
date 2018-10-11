<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Shoot_model extends CI_Model
{
    public function __construct()
    {

    }

    /* Returns current logged in users club information */
    public function details($id)
    {
        return $this->db->select('*')
            ->where('id', $id)
            ->get('Shoot')->row();
    }
}