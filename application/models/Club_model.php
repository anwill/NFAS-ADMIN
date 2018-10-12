<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Club_model extends CI_Model
{
    public function __construct()
    {
        $this->load->model('shoot_model');
        $this->load->model('booking_model');

    }

    /* Returns current logged in users club information */
    public function details()
    {
        $club_id = $this->session->userdata['club_id'];
        $club = $this->db->select('*')
                        ->where('id', $club_id)
                        ->get('Club')->row();
        $club->latest = $this->booking_model->latest($club->id);
        return $club;
    }

    public function get_next_shoot()
    {
        $club_id = $this->session->userdata['club_id'];
        $shoot = $this->db->select('*')
                        ->where('club_id', $club_id)
                        ->where('date_start > NOW()')
                        ->order_by('date_start DESC')
                        ->limit('1')
                        ->get('Shoot')->row();
        if (isset($shoot)) {
            $shoot->number_archers = $this->shoot_model->number_booked_in($shoot->id);
            return $shoot;
        }

        return null;
    }

    public function get_last_shoot()
    {
        $club_id = $this->session->userdata['club_id'];
        $shoot = $this->db->select('*')
                        ->where('club_id', $club_id)
                        ->where('date_start < NOW()')
                        ->order_by('date_start DESC')
                        ->limit('1')
                        ->get('Shoot')->row();
        if (isset($shoot)) {
            $shoot->number_archers = $this->shoot_model->number_booked_in($shoot->id);
            return $shoot;
        }

        return null;

    }

    public function get_all_future_shoots()
    {
        $shoots = array();
        $club_id = $this->session->userdata['club_id'];
        $shoot = $this->db->select('*')
            ->where('club_id', $club_id)
            ->where('date_start >= NOW()')
            ->order_by('date_start DESC')
            ->get('Shoot');
        foreach ($shoot->result() as $row) {
            array_push($shoots, $row);
        }
        return $shoots;
    }
}