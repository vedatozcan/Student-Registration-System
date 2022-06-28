<?php

class StudentList extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("StudentModel/StudentListModel", "StudentListModel");
    }
    public function index()
    {
        $data['students'] = $this->StudentListModel->studentList();
        $this->load->view("StudentView/StudentListView", $data);
    }

    
    
}
