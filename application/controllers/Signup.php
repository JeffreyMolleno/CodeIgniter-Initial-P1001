<?php

class Signup extends CI_controller{
    public function __construct(){
        parent::__construct();

        // for what?
        // on loading form helper library
        // assist in working with forms -> to what extent?
        $this->load->helper('form');

        // Load form validation library
        $this->load->library('form_validation');

        // Load model for form transactions
        $this->load->model('login/signin_model');
    }

    public function index(){
        $this->load->view('links.php');
		$this->load->view('login/signup_view');
    }

    public function data_submitted(){

        // on storing data from POST method
        $this->signin_model->register(array('username'=>$this->input->post('f_username'), 'password'=>$this->input->post('f_password')));

        $data = array('username'=>$this->input->post('f_username'),
                      'password'=>$this->input->post('f_password'));

        $this->load->view('links.php');
        $this->load->view('login/signin_view', $data);
    }

    public function login(){
        $this->load->view('links.php');
        $this->load->view('login/signin_view');
    }
}