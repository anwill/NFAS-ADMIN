<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library(array('ion_auth','form_validation'));
        $this->load->helper(array('url','language'));
        $this->load->helper('security');

        $this->lang->load('auth');

        $this->load->model('club_model');
        $this->load->model('shoot_model');
        $this->load->model('messages_model');

    }

    public function index()
    {
        if ($this->ion_auth->logged_in()) {
            $data = Array();
            $data['club'] = $this->club_model->details();
            $data['next_shoot'] = $this->club_model->get_next_shoot();
            $data['last_shoot'] = $this->club_model->get_last_shoot();
            $data['messages'] = $this->messages_model->todays_messages();
            $this->_render_page('home', $data);
        } else {
            $this->load->view('auth/login');
        }

    }

    public function view_shoots() {
        if ($this->ion_auth->logged_in()) {
            $data['club'] = $this->club_model->details();

            $this->_render_page('shoots', $data);

        } else {
            $this->load->view('auth/login');
        }
    }

    public function view_shoot($id = null) {
        if ($this->ion_auth->logged_in()) {
            $data['club'] = $this->club_model->details();
            if (! isset($id)) {
                $this->session->set_flashdata('message', 'Invalid shoot id');
                redirect('booking/view_shoots');
            }
            $data['shoot'] = $this->shoot_model->details($id);
            if (! isset($data['shoot'])) {
                $this->session->set_flashdata('message', 'Invalid shoot id');
                redirect('booking/view_shoots');
            }

            $this->_render_page('shoot', $data);

        } else {
            $this->load->view('auth/login');
        }
    }


    /*public function register_result() {
        // Grab the data save it to the user table
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('class', 'Class', 'required');

        if ($this->form_validation->run() == true)
        {
            $username = xss_clean($this->input->post('email'));
            $email = xss_clean($this->input->post('email'));
            $password = xss_clean($this->input->post('password'));
            $additional_data = array(
                'first_name' => xss_clean($this->input->post('first_name')),
                'last_name' => xss_clean($this->input->post('last_name')),
                'club' => xss_clean($this->input->post('club')),
                'class' => xss_clean($this->input->post('class'))
            );

            $group = array('2');

            if ($this->ion_auth->register($username, $password, $email, $additional_data, $group)) {
                $this->session->set_flashdata('message', 'Registration successful. You are now logged in');
                $this->index();
            } else {
                $this->session->set_flashdata('message', 'Registration failed. ' . $this->ion_auth->errors());
                $this->register();
            }

        } else {
            $this->register();
        }
    }

    public function about() {
        $this->_render_page('about', null);
    }


    public function my_scores() {
        if (! $this->ion_auth->logged_in()) {
            redirect('auth/login');
        } else {
            $data["scores"] = $this->scores_model->my_scores();

            $this->_render_page('my_scores', $data);
        }
    }*/






    // Private functions
    private function _render_page($page,$data) {
        $data['is_admin'] = $this->ion_auth->is_admin();
        $data['logged_in'] = $this->ion_auth->logged_in();
        $this->load->view('header',$data);
        $this->load->view($page, $data);
        $this->load->view('footer', $data);
    }
}
