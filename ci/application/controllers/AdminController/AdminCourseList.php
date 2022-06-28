<?php

class AdminCourseList extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("AdminModel/AdminCourseListModel");
    }
    public function index()
    {
        if($this->input->get('courseDetail')!=null || $this->input->get('courseDetail')!=''){
            $data['courseDetails'] = $this->AdminCourseListModel->getCourseDetails($this->input->get('courseDetail'));
            $this->load->view("AdminView/AdminCourseListView",$data);
        }
        elseif($this->input->get('courseDetail')=='' && null!==($this->input->get('courseDetail'))){
            redirect('AdminController/AdminCourseList');
        }
        else{
            
            $data['courses']=$this->AdminCourseListModel->getCourse();
        $this->load->view("AdminView/AdminCourseListView",$data);
        }
       
    }
    
}

?>
