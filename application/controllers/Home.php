<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends SuperController {

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

            
            // get count status registration
            $jml_status = $this->db
                                ->select("count(id) as jml, status")
                                ->group_by("status")
                                ->get("registration_status")->result_array();
            $data['jml_status']['total'] = 0;
            $data['jml_status']['diterima'] = 0;
            $data['jml_status']['ditolak'] = 0;
            $data['jml_status']['cadangan'] = 0;
            foreach ($jml_status as $key => $value) {
                $data['jml_status'][$value['status']] = $value['jml'];
                $data['jml_status']['total'] += $value['jml'];
            }
            
            if($data['data_user']['role'] == "admin"){
                $this->db->where_in("status", ["belum disetujui", "sedang diproses", "cadangan"]);
            }
            $data['pendaftar'] = $this->db
                                    ->join("user", "user.id = user_id", "left")
                                    ->join("registration_status rs", "rs.student_id = student_data.id")
                                    ->get("student_data")->result_array();
            
            
            $this->template('home_v', $data);
        }else{
            redirect("log");
        }
		
	}

    // student candidate registration
    public function registration(){
        if($this->is_logined){
            $this->userdata = $this->session->tempdata("userdata");
            $data['data_user'] = $this->userdata;
            $email = $this->userdata["email"];
            // get previous registration
            $reg = $this->db
                            ->select("
                                firstname, lastname,
                                user.id as user_id, 
                                student_data.id as student_id, 
                                school_origin, nik_id, family_card, 
                                birth_place, birth_date, citizenship,
                                birth_certificate, certificate_degree,
                                certificate_exam_results, status, nis, nem")
                            ->where("email", $email)
                            ->join("student_data","user_id=user.id", "right")
                            ->join("registration_status","registration_status.student_id=student_data.id", "left")
                            ->get("user")->row_array();
            // var_dump($reg);exit;
            if(!empty($reg)){
                $data['prev_data_diri'] = $reg;
                $data["prev_data_father"] = $this->db->where(["relationship_as" => "father", "student_id" => $reg['student_id']])->get("student_guardian")->row_array();
                $data["prev_data_mother"] = $this->db->where(["relationship_as" => "mother", "student_id" => $reg['student_id']])->get("student_guardian")->row_array();   
            }
            $data['user_id'] = $this->userdata["id"];
            $data['submit_url'] = site_url("home/submit_registration");

            $this->template('registration_v', $data);
        }  else{
            redirect("log");
        }
    }

    public function submit_registration(){
        $post = $this->input->post();
        // var_dump($post);
        $dir = $post['fullname'];

        $this->db->trans_begin();

        $data_diri = [
            "user_id" => $post['user_id'],
            "nik_id" => $post['nik_id'],
            "nis" => $post['nis'],
            "nem" => $post['nem'],
            "birth_place" => $post['birth_place'],
            "birth_date" => $post['birth_date'],
            "citizenship" => $post['citizenship'],
            "birth_certificate" => $this->do_upload($dir, "birth_certificate")['filename'],
            "family_card" => $this->do_upload($dir, "family_card")['filename'],
            "certificate_degree" => $this->do_upload($dir, "certificate_degree")['filename'],
            "certificate_exam_results" => $this->do_upload($dir, "certificate_exam_results")['filename'],
            "school_origin" => $post['school_origin']
        ];

        if($post["student_id"] != ""){
            
            $student_id = $post["student_id"];
            $this->db->where("id", $student_id)->update("student_data", $data_diri);
        }else{
            $this->db->insert("student_data", $data_diri);
            $student_id = $this->db->insert_id();
        }
        

        $data_father = [
            "student_id" => $student_id,
            "relationship_as" => "father",
            "address" => $post['father_address'],
            "phone" => $post['father_phone'],
            "job" => $post['father_job'],
            "last_education" => $post['father_last_education'],
            "guardian_name" => $post["father_name"]
        ];

        $data_mother = [
            "student_id" => $student_id,
            "relationship_as" => "mother",
            "address" => $post['mother_address'],
            "phone" => $post['mother_phone'],
            "job" => $post['mother_job'],
            "last_education" => $post['mother_last_education'],
            "guardian_name" => $post["mother_name"]
        ];

        if($post["student_id"] != ""){
            
            $this->db->where(["student_id" => $student_id, "relationship_as" => "father"])->update("student_guardian", $data_father);
            $this->db->where(["student_id" => $student_id, "relationship_as" => "mother"])->update("student_guardian", $data_mother);
            $this->db->where("id", $student_id)->update("registration_status", ["student_id" => $student_id, "status" => "belum disetujui"]);
        }else{
            $this->db->insert_batch("student_guardian", [$data_father, $data_mother]);
            $this->db->insert("registration_status", ["student_id" => $student_id, "status" => "belum disetujui"]);
        }
        

        if ($this->db->trans_status() === FALSE)
            {
                $this->db->trans_rollback();
                $this->session->set_flashdata(["message" => "Gagal submit data", "status" => "danger"]);
            }
            else
            {
                $this->db->trans_commit();
                $this->session->set_flashdata(["message" => "Berhasil submit data", "status" => "success"]);
                redirect("home");
            }
        
    }

    private function do_upload($dir, $fieldname){
        $config['allowed_types'] = '*';
        $config['overwrite'] = false;

        $dir = "uploads/$dir";
        if (!is_dir($dir)){
            mkdir($dir, 0777, true);
        }

        $config['upload_path'] = $dir;
        $config['encrypt_name'] = true;

        $this->load->library('upload', $config);
        $filename = "";
        $message="";
        if(!empty($_FILES[$fieldname]['tmp_name'])){

            if ($this->upload->do_upload($fieldname)){
                $upl = $this->upload->data();
                $filename = $upl['file_name'];
            } else {
                $message = $this->upload->display_errors('', '');
            }

        } else {
            $message = "No file";
            $filename = $_FILES[$fieldname]['tmp_name'];
        }

        return ["filename" => $filename, "message" => $message];
    }

    public function download($fullname, $filename){
        $file = "uploads/".urldecode($fullname)."/".$filename;
        if (file_exists($file)) {
            $this->load->helper('download');
            force_download($file, null);
            exit;
        }else{
            echo "<script> alert('file tidak ditemukan') </script>";
        }
    }

    public function verification($id){
        if($this->is_logined){
            // update status 
            $this->db->where(["student_id" => $id])->update("registration_status", ["status" => "sedang diproses"]);

            $this->userdata = $this->session->tempdata("userdata");
            $data['data_user'] = $this->userdata;
            $email = $this->userdata["email"];
            // get previous registration
            $reg = $this->db
                            ->select("
                                firstname, lastname,
                                user.id as user_id, 
                                student_data.id as student_id, 
                                school_origin, nik_id, family_card, 
                                birth_place, birth_date, citizenship,
                                birth_certificate, certificate_degree,
                                certificate_exam_results, status, nis, nem")
                            ->where("student_id", $id)
                            ->join("student_data","user_id=user.id", "right")
                            ->join("registration_status","registration_status.student_id=student_data.id", "left")
                            ->get("user")->row_array();
            // var_dump($reg);exit;
            if(!empty($reg)){
                $data['prev_data_diri'] = $reg;
                $data["prev_data_father"] = $this->db->where(["relationship_as" => "father", "student_id" => $reg['student_id']])->get("student_guardian")->row_array();
                $data["prev_data_mother"] = $this->db->where(["relationship_as" => "mother", "student_id" => $reg['student_id']])->get("student_guardian")->row_array();   
            }
            $data['user_id'] = $this->userdata["id"];
            $data['submit_url'] = site_url("home/submit_verification");

            $this->template('verification_v', $data);
        }  else{
            redirect("log");
        }
    }

    public function submit_verification(){
        $post = $this->input->post();


        $this->db->trans_begin();

        $this->db->where(["student_id" => $post['student_id']])->update("registration_status", ["status" => $post['status']]);

        if ($this->db->trans_status() === FALSE)
            {
                $this->db->trans_rollback();
                $this->session->set_flashdata(["message" => "Gagal submit data", "status" => "danger"]);
            }
            else
            {
                $this->db->trans_commit();
                $this->session->set_flashdata(["message" => "Berhasil submit data", "status" => "success"]);
                redirect("home");
            }
        
    }

    public function monitor(){
        if($this->is_logined){
            $email = $this->userdata["email"];
            // get data user
            $data['data_user'] = $this->userdata;

            
            // get count status registration
            $jml_status = $this->db
                                ->select("count(id) as jml, status")
                                ->group_by("status")
                                ->get("registration_status")->result_array();
            foreach ($jml_status as $key => $value) {
                $data['jml_status'][$value['status']] = $value['jml'];
            }

            $data['pendaftar'] = $this->db
                                    ->join("user", "user.id = user_id", "left")
                                    ->join("registration_status rs", "rs.student_id = student_data.id")
                                    ->get("student_data")->result_array();
            
            
            $this->template('monitor_v', $data);
        }else{
            redirect("log");
        }
		
	
    }

    public function detail_data($id){
        if($this->is_logined){

            $this->userdata = $this->session->tempdata("userdata");
            $data['data_user'] = $this->userdata;
            $email = $this->userdata["email"];
            // get previous registration
            $reg = $this->db
                            ->select("
                                firstname, lastname,
                                user.id as user_id, 
                                student_data.id as student_id, 
                                school_origin, nik_id, family_card, 
                                birth_place, birth_date, citizenship,
                                birth_certificate, certificate_degree,
                                certificate_exam_results, status, nis, nem")
                            ->where("student_id", $id)
                            ->join("student_data","user_id=user.id", "right")
                            ->join("registration_status","registration_status.student_id=student_data.id", "left")
                            ->get("user")->row_array();
            // var_dump($reg);exit;
            if(!empty($reg)){
                $data['prev_data_student'] = $reg;
                $data["prev_data_father"] = $this->db->where(["relationship_as" => "father", "student_id" => $reg['student_id']])->get("student_guardian")->row_array();
                $data["prev_data_mother"] = $this->db->where(["relationship_as" => "mother", "student_id" => $reg['student_id']])->get("student_guardian")->row_array();   
            }
            $data['user_id'] = $this->userdata["id"];
            $data['submit_url'] = site_url("");

            $this->template('detail_data_v', $data);
        }  else{
            redirect("log");
        }
    }

    public function export_pdf($id){
        if($this->is_logined){

            $this->userdata = $this->session->tempdata("userdata");
            $data['data_user'] = $this->userdata;
            $email = $this->userdata["email"];
            // get previous registration
            $reg = $this->db
                            ->select("
                                firstname, lastname,
                                user.id as user_id, 
                                student_data.id as student_id, 
                                school_origin, nik_id, family_card, 
                                birth_place, birth_date, citizenship,
                                birth_certificate, certificate_degree,
                                certificate_exam_results, status, nis, nem")
                            ->where("student_id", $id)
                            ->join("student_data","user_id=user.id", "right")
                            ->join("registration_status","registration_status.student_id=student_data.id", "left")
                            ->get("user")->row_array();
           
            $data_father = $this->db->where(["relationship_as" => "father", "student_id" => $reg['student_id']])->get("student_guardian")->row_array();
            $data_mother = $this->db->where(["relationship_as" => "mother", "student_id" => $reg['student_id']])->get("student_guardian")->row_array();   
            
            $data['user_id'] = $this->userdata["id"];
            $data['submit_url'] = site_url("");

            include('export_data_pdf.php');
        }  else{
            redirect("log");
        }
    }


}
