<?php

class StudentContact extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("StudentModel/StudentContactModel");
    }
    public function index()
    {
        $this->load->view("StudentView/StudentContactView");
    }
}

?>
