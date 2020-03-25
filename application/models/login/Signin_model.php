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

        public function login($data){
            $res = $this->db->get_where('user', array('username'=>$data['username'], 'password'=>$data['password']));

            // return $res->num_rows() > 0? true : false;

            if($res->num_rows()){
                return $res->result();
            }
        }
    }