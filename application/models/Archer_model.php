<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Archer_model extends CI_Model
{
    public function __construct()
    {
        $this->load->model('booking_model');
    }

    /* Returns current logged in users club information */
    public function details($id)
    {
        return $this->db->select('*')
            ->where('id', $id)
            ->get('Archer')->row();
    }

    public function get_archers_by_booking($id)
    {
        $archers = [];
        $query = $this->db->select('*')
            ->where('booking_id', $id)
            ->get('Archer');

        foreach ($query->result() as $row) {
            array_push($archers,$row);
        }

        return $archers;
    }


}