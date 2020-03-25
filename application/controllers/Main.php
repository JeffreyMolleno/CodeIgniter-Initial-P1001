<?php

    class Main extends CI_controller{
        public function __construct(){
            parent::__construct();
        }

        public function index(){
            $this->session->userdata('username') && $this->session->userdata('id') ?
            $this->load->view('landing_view'):
            redirect('signup/login');
        }
    }