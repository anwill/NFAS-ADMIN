<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Booking_model extends CI_Model
{
    public function __construct()
    {
        $this->load->model('archer_model');
        $this->load->model('shoot_model');

    }

    /* Returns current logged in users club information */
    public function details($id)
    {
        return $this->db->select('*')
            ->where('id', $id)
            ->get('Booking')->row();
    }

    public function latest($id)
    {
        return $this->_get($id, 14);
    }

    public function bookings_in_last_day($id)
    {
        return $this->_get($id, 1);
    }

    private function _get($id = null, $interval = 1)
    {
        $latest = array();
        $bookings = $this->db->select('Booking.*')
            ->join('Shoot', 'Shoot.id = Booking.shoot_id')
            ->join('Club', 'Club.id = Shoot.club_id')
            ->where("date_booked > DATE_SUB(NOW(), INTERVAL $interval DAY)")
            ->where('Club.id', $id)
            ->order_by('date_booked')
            ->get('Booking');

        foreach ($bookings->result() as $b) {
            // Get the archers
            $archers = $this->archer_model->get_archers_by_booking($b->id);

            // Get the shoot info
            $shoot = $this->shoot_model->details($b->shoot_id);

            $latest[$b->id] = array(
                'booking' => $b,
                'shoot' => $shoot,
                'archers' => $archers
            );
        }

        return $latest;
    }
}