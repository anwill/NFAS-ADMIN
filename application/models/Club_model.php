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

    public function get_next_shoot()
    {
        $club_id = $this->session->userdata['club_id'];
        return $this->db->select('*')
                        ->where('club_id', $club_id)
                        ->where('date_start > NOW()')
                        ->order_by('date_start DESC')
                        ->limit('1')
                        ->get('Shoot')->row();
    }

    public function get_last_shoot()
    {
        $club_id = $this->session->userdata['club_id'];
        return $this->db->select('*')
                        ->where('club_id', $club_id)
                        ->where('date_start < NOW()')
                        ->order_by('date_start DESC')
                        ->limit('1')
                        ->get('Shoot')->row();
    }
}