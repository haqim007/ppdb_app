<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SuperController extends CI_Controller {

    public function __construct()
    {
            parent::__construct();
            $this->is_logined = $this->session->tempdata("is_logined");
            $this->userdata = $this->session->tempdata("userdata");
            // set menu
            if($this->userdata['role'] == "admin"){
                $this->menu = [
                    ["url" => site_url('home'), "name"=>"Dashboard", "is_active"=>"false", "icon" => "fa-tachometer-alt"],
                    ["url" => site_url("users"), "name"=>"Manajemen User", "is_active"=>"false", "icon" => "fa-plus-square"],
                    ["url" => site_url("home/monitor"), "name"=>"Monitor Pendaftaran", "is_active"=>"false", "icon" => "fa-plus-square"]
                ];
            }else{
                // get registration
                $reg = $this->db
                                ->where("email", $this->userdata['email'])
                                ->join("student_data","user_id=user.id", "right")
                                ->join("registration_status","registration_status.student_id=student_data.id", "left")
                                ->get("user")->row_array();
                if(!empty($reg)){
                    $url = in_array($reg['status'], ["belum disetujui", "sedang diproses"]) ? site_url("home/registration") : site_url("home/detail_data/".$reg['student_id']);
                    $menu_form = ["url" => $url, "name"=>"Lihat Data", "is_active"=>"false", "icon" => "fa-plus-square"];
                }else{
                    $menu_form = ["url" => site_url("home/registration"), "name"=>"Pendaftaran", "is_active"=>"false", "icon" => "fa-plus-square"];

                }
                $this->menu = [
                    ["url" => site_url("home"), "name"=>"Dashboard", "is_active"=>"false", "icon" => "fa-tachometer-alt"],
                    $menu_form
                ];
            }
    }

	protected function template($content_view, $data=[]){
        $data['menu'] = $this->menu;
        $this->load->view("header_v", $data);
        $this->load->view($content_view, $data);
        $this->load->view("footer_v", $data);
    }

    protected function generateHTMLToPDF($title, $content, $custom_header = "", $custom_footer = "", $paper_size="A4", $orientation="potrait"){
    // check the docs
    // https://github.com/dompdf/dompdf/tree/v0.6.2
    $this->load->helper('dompdf_helper');
    $header = '<header></header>';
    $main = '<main><div style="max-width:100%;max-height:100%;">'.$content.'</div></main>';
    $year_now = date("Y");
    $footer = !empty($custom_footer) ? $custom_footer : "";
    $footer = "<footer>$footer</footer>";

    $DomPDF_helper = new DomPDF_helper();
    $DomPDF_helper->set_paper($paper_size, $orientation);
    $DomPDF_helper->set_option('isRemoteEnabled', TRUE);
    $DomPDF_helper->set_option('enable_font_subsetting', TRUE);
    $DomPDF_helper->set_option('enable_unicode', TRUE);
    $DomPDF_helper->set_option('enable_html5_parser', TRUE);
    $DomPDF_helper->set_option('enable_css_float', TRUE);

    $allcontent = <<<EOF
        <!DOCTYPE html>
        <html>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
            <style>
                @page { margin: 0 0; }
                body{margin-left: 25px;margin-right: 25px;margin-top:70px; margin-bottom:70px;}
                header { position: fixed; top: 10px; left: 0px; right: 0px; height: 50px;margin-right: 25px }
                footer { position: fixed;bottom: 10px; left: 0px; right: 0px; height: 50px; }
                main { page-break-after: auto; }
                main:last-child { page-break-after: auto; }
            </style>
        </head>
        <body>
            <!-- Define header and footer blocks before your content -->
            $header
            $footer
            <!-- Wrap the content of your PDF inside a main tag -->
            $main
            
        </body>
    </html>
EOF;
    // echo $allcontent;

    $DomPDF_helper->export_html($title, $allcontent);
  }


}
