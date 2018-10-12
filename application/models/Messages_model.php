<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Messages_model extends CI_Model
{
    public function __construct()
    {
        $this->load->model('shoot_model');
        $this->load->model('booking_model');
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

    }
}