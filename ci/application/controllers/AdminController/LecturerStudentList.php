<?php

class LecturerStudentList extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("AdminModel/LecturerStudentListModel");
    }
    public function index()
    {
        if($this->input->get('search')!=null || $this->input->get('search')!=''){
            $data['students'] = $this->LecturerStudentListModel->getStudentsSearch($this->input->get('search'));
            $data['searchWord'] = $this->input->get('search');
            $this->load->view("AdminView/LecturerStudentListView",$data);
        }
        elseif($this->input->get('search')=='' && null!==($this->input->get('search'))){
            redirect('AdminController/LecturerStudentList');
        }
        else{
            
            $data['students']=$this->LecturerStudentListModel->getStudents($this->session->lecturer_id);
            $this->load->view("AdminView/LecturerStudentListView",$data);
        }
        
            
            
       
    }
    
}

?>
