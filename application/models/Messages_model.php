<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Messages_model extends CI_Model
{
    public function __construct()
    {
        $this->load->model('shoot_model');
        $this->load->model('booking_model');
        $this->load->model('club_model');
    }

    public function todays_messages()
    {
        $messages = array();
        $club_id = $this->session->userdata['club_id'];

        /*  Get the following
            1. Any bookings in the last 24 hours
            2. Shoot full
            3. Any admin messages ... not yet implemented
        */

        $bookings = $this->booking_model->bookings_in_last_day($club_id);
        foreach ($bookings as $b) {
            array_push($messages,
                "New Booking: " . $b['booking']->booker_email . " with " . count($b['archers']) . " archer(s) for " . $b['shoot']->date_start);

        }

        $shoots = $this->club_model->get_all_future_shoots();
        foreach ($shoots as $s) {
            $total_booked = $this->shoot_model->number_booked_in($s->id);
            $total_available = $s->targets * $s->max_per_target;

            if ($total_booked == $total_available) {
                array_push($messages, "Shoot full: " . $s->date_start);
            }
            if ($total_booked > $total_available) {
                array_push($messages, "Shoot over subscribed: " . $s->date_start);
            }
            if (($total_booked/$total_available) > 0.9) {
                array_push($messages, "Shoot filling up: " . $s->date_start);
            }


        }

        return $messages;
    }
}