<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Club_model extends CI_Model
{
    public function __construct()
    {

    }

    /* Returns current logged in users club information */
    public function details()
    {
        $club_id = $this->session->userdata['club_id'];
        return $this->db->select('*')
                        ->where('id', $club_id)
                        ->get('Club')->row();
    }
}