<?php

class LecturerHome extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("AdminModel/LecturerHomeModel");
    }
    public function index()
    {
        $this->load->view("AdminView/LecturerHomeView");
    }
    public function logout()
    {    
       $logout= $this->session->sess_destroy();	
        if(!$logout)
        {
          redirect("AdminController/AdminLogin");
        }	
    }
}

?>
