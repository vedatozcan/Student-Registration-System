<?php

class AdminHome extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("AdminModel/AdminHomeModel");
    }
    public function index()
    {
        $this->load->view("AdminView/AdminHomeView");
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
