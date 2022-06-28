<?php

class StudentLecturerList extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("StudentModel/StudentLecturerListModel", "StudentLecturerListModel");
    }
    public function index()
    {
        $data['lecturers'] = $this->StudentLecturerListModel->getLecturers();
        $this->load->view("StudentView/StudentLecturerListView", $data);
    }
    
}
