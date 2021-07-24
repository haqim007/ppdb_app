<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends SuperController {

    public function __construct(){
        parent::__construct();
        $this->is_logined = $this->session->tempdata("is_logined");
        $this->userdata = $this->session->tempdata("userdata");
        
    }

	public function index()
	{

        if($this->is_logined){
            $email = $this->userdata["email"];
            // get data user
            $data['data_user'] = $this->userdata;

            $data['users'] = $this->db->get("user")->result_array();
             
            $this->template('users_v', $data);
        }else{
            redirect("log");
        }
		
	}

    public function create(){
        if($this->is_logined){
            $email = $this->userdata["email"];
            // get data user
            $data['data_user'] = $this->userdata;
            $data['submit_url'] = site_url("users/submit_create");
            $this->template('form_user_v', $data);
        }else{
            redirect("log");
        }
        
    }

    public function update($id){
        if($this->is_logined){
            $email = $this->userdata["email"];
            // get data user
            $data['data_user'] = $this->userdata;
            $data['submit_url'] = site_url("users/submit_update");

            $data['edit_user'] = $this->db->where("id", $id)->get("user")->row_array();
            $this->template('form_user_v', $data);
        }else{
            redirect("log");
        }
        
    }

    public function submit_create(){
        $post = $this->input->post();
        if(empty($post)){
            redirect("users/create");
        }
        $hash_password = hash ( "sha256", $post["password"] );
        // check account
        $check = $this->db->where(["email" => $post['email']])
                          ->get("user")->row_array();
        if(!empty($check)){
            $this->session->set_flashdata(["message" => "Email sudah terdaftar", "status" => "danger"]);
            redirect("users/create");
        }

        $insert = $this->db->insert("user", [
            "email" => $post['email'], 
            "password" => $hash_password, 
            "firstname" => $post['firstname'], 
            "lastname" => $post['lastname'],
            "gender" => $post["gender"],
            "role" => $post["role"]
        ]);
        if($this->db->affected_rows() > 0){
            // keep session for 1 hour
            $this->session->set_flashdata(["message" => "Berhasil menambah data. Silahkan login", "status" => "success"]);
            redirect(site_url("users"));
        }else{
            $this->session->set_flashdata(["message" => "Gagal menambah data", "status" => "danger"]);
            redirect("users/create");
        }
    }

    public function submit_update(){
        $post = $this->input->post();
        if(empty($post)){
            redirect("users/");
        }
        $hash_password = hash ( "sha256", $post["password"] );

        $this->db->where("id", $post['id']);
        $update = $this->db->update("user", [
            "email" => $post['email'], 
            "password" => $hash_password, 
            "firstname" => $post['firstname'], 
            "lastname" => $post['lastname'],
            "gender" => $post["gender"],
            "role" => $post["role"]
        ]);
        if($this->db->affected_rows() > 0){
            // keep session for 1 hour
            $this->session->set_flashdata(["message" => "Berhasil memperbarui data", "status" => "success"]);
            redirect(site_url("users"));
        }else{
            $this->session->set_flashdata(["message" => "Gagal memperbarui data", "status" => "danger"]);
            redirect("users/update/".$post['id']);
        }
    }

    public function delete($id){
        if($this->is_logined){

            $this->db->where("id", $id)->delete("user");
            $this->session->set_flashdata(["message" => "Berhasil menghapus data", "status" => "success"]);
            redirect("users");
        }else{
            redirect("log");
        }
        
    }


}
