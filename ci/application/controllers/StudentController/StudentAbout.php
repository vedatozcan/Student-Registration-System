<?php

class StudentAbout extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("StudentModel/StudentAboutModel");
    }
    public function index()
    {
        $this->load->view("StudentView/StudentAboutView");
    }
}

?>
