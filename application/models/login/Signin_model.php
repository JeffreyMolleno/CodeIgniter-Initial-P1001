<?php

    class Signin_model extends CI_Model{
        public function __construct(){
            parent::__construct();
        }

        public function register($data){

            // template for data structure with a username and password
            // $data = array('username'=>$username,'password'=>$password);

            if($data){
                $this->db->insert('user', $data);
            }
        }
    }