<?php

class StudentHome extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("StudentModel/StudentHomeModel");
    }
    public function index()
    {
        $this->load->view("StudentView/StudentHomeView");
    }
    public function logout()
    {    
       $logout= $this->session->sess_destroy();	
        if(!$logout)
        {
          redirect(base_url()."StudentController/StudentLogin");
        }	
    }
}

?>
