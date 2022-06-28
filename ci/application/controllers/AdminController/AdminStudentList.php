<?php

class AdminStudentList extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("AdminModel/AdminStudentListModel");
    }
    public function index()
    {
        if($this->input->get('search')!=null || $this->input->get('search')!=''){
            $data['students'] = $this->AdminStudentListModel->getStudentsSearch($this->input->get('search'));
            $data['searchWord'] = $this->input->get('search');
            $this->load->view("AdminView/AdminStudentListView",$data);
        }
        elseif($this->input->get('search')=='' && null!==($this->input->get('search'))){
            redirect('AdminController/AdminStudentList');
        }
        else{
            
            $data['students']=$this->AdminStudentListModel->getStudents();
            $this->load->view("AdminView/AdminStudentListView",$data);
        }
    }
    
    public function deleteStudent()
    {
        $student_id = $this->input->get('student_id');
        if(count($this->AdminStudentListModel->verifyAccount($student_id))>='1'){
            $delete = $this->AdminStudentListModel->deleteStudent($student_id);
            if($delete){ ?>
                <script>
                    alert('Delete Process Success');
                    window.location.href = '<?=base_url('')?>AdminController/AdminStudentList';
                </script>
          <?php  }else{ ?>
                <script>
                    alert('Delete Process Error');
                    window.location.href = '<?=base_url('')?>AdminController/AdminStudentList';
                </script>
          <?php  }
        }else{ ?>
            <script>
                alert('Student ID not found');
                window.location.href = '<?=base_url('')?>AdminController/AdminStudentList';
            </script>
      <?php }
        
    }
    
}

?>
