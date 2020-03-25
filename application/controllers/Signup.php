<?php

class Signup extends CI_controller{
    public function __construct(){
        parent::__construct();

        // $this->session->unset_userdata('username','id');

        // on loading form helper library
        // $this->load->helper('form');

        // Load form validation library
        $this->load->library('form_validation');

        // Load model for form transactions
        $this->load->model('login/signin_model');
    }

    public function index(){
        $this->load->view('links.php');
		$this->load->view('login/signup_view');
    }

    public function register_data(){

        // on storing data from POST method
        $this->signin_model->register(array('username'=>$this->input->post('f_username'), 'password'=>$this->input->post('f_password')));

        $data = array('username'=>$this->input->post('f_username'),
                      'password'=>$this->input->post('f_password'));

        $this->load->view('links.php');
        $this->load->view('login/signin_view', $data);
    }

    public function login_check(){

        $res = $this->signin_model->login(array('username'=>$this->input->post('f_username'), 'password'=>$this->input->post('f_password')));

        if($res){
            // inserting session
            $userdata = array( 'username'=> $res[0]->username,
                               'id' => $res[0]->id );
            $this->session->set_userdata($userdata);

            echo redirect('main');
        }else{
            $this->load_prev_data();
        }
    }

    public function load_prev_data(){

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