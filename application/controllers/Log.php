<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }

	public function index()
	{

        $is_logined = $this->session->tempdata("is_logined");
        if($is_logined){
            redirect(site_url("home"));
        }else{
            $this->load->view('login_v');
        }
        
		
	}


    public function submit_in(){
        $post = $this->input->post();
        if(empty($post)){
            redirect("log");
        }
        $hash_password = hash ( "sha256", $post["password"] );
        // check account
        $data = $this->db->where(["email" => $post['email'], "password" => $hash_password])
                          ->get("user")->row_array();
        if(!empty($data)){
            // keep session for 1 hour
            $this->session->set_tempdata(["userdata" => $data, "is_logined" => true], NULL, 3600);
            redirect(site_url("home"));
        }else{
            $this->session->set_flashdata(["message" => "Email atau password tidak terdaftar", "status" => "danger"]);
            redirect("log/in");
        }

    }

    public function signup()
	{
        
        $is_logined = $this->session->tempdata("is_loginned");
        if($is_logined){
            redirect(site_url("home"));
        }else{
            $this->load->view('signup_v');
        }
        
		
	}

    public function submit_signup(){
        $post = $this->input->post();
        if(empty($post)){
            redirect("log");
        }
        $hash_password = hash ( "sha256", $post["password"] );
        // check account
        $check = $this->db->where(["email" => $post['email']])
                          ->get("user")->row_array();
        if(!empty($check)){
            $this->session->set_flashdata(["message" => "Email sudah terdaftar", "status" => "danger"]);
            redirect("log/signup");
        }

        $insert = $this->db->insert("user", [
            "email" => $post['email'], 
            "password" => $hash_password, 
            "firstname" => $post['firstname'], 
            "lastname" => $post['lastname'],
            "gender" => $post["gender"],
            "role" => "student"
        ]);
        if($this->db->affected_rows() > 0){
            // keep session for 1 hour
            $this->session->set_flashdata(["message" => "Berhasil melakukan registrasi. Silahkan login", "status" => "success"]);
            redirect(site_url("log"));
        }else{
            $this->session->set_flashdata(["message" => "Gagal melakukan registrasi", "status" => "danger"]);
            redirect("log/signup");
        }

    }

    public function out(){
        $this->session->sess_destroy();
        redirect(site_url("log"));
    }
}
