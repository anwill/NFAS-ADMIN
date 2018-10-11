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

    public function number_booked_in($id)
    {
        return $this->db->select('Archer.*')
                        ->join('Booking', 'Shoot.id = Booking.shoot_id')
                        ->join('Archer', 'Booking.id = Archer.booking_id')
                        ->where('Shoot.id', $id)
                        ->get('Shoot')->count();
    }
}