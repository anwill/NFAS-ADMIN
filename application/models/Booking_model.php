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

    public function latest()
    {
        $latest = array();
        $bookings = $this->db->select('*')
            ->where('date_booked > DATE_SUB(NOW(), INTERVAL 7 DAY)')
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