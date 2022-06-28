<?php

class AdminStudentUpdate extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("AdminModel/AdminStudentUpdateModel");
    }
    public function index()
    {
        if ($this->input->get('student_id') != null || $this->input->get('student_id') != '') {
            $data['userInfo'] = $this->AdminStudentUpdateModel->getStudentInfo($this->input->get('student_id'));
            $data['departments'] = $this->AdminStudentUpdateModel->getDepartment();
            $data['action'] = base_url()."AdminController/AdminStudentUpdate/updateStudentData";
            $this->load->view("AdminView/AdminStudentUpdateView",$data);
        } else { ?>
            <script>
                alert('Empty PARAMETER');
                window.location.href = '<?= base_url('') ?>AdminController/AdminStudentList';
            </script>
<?php }
    }
    public function updateStudentData()
    {
        $student_id = $this->input->post("student_id");
        $student_firstname = $this->input->post("student_firstname");
        $student_lastname = $this->input->post("student_lastname");
        $student_birthdate = $this->input->post("student_birthdate");
        $student_gender = $this->input->post("student_gender");
        $student_phone = $this->input->post("student_phone");
        $student_major = $this->input->post("student_major");
        $student_class = $this->input->post("student_class");

        $data = array(
            'student_birthdate' => $student_birthdate,
            'student_firstname' => $student_firstname,
            'student_lastname' => $student_lastname,
            'student_gender' => $student_gender,
            'student_phone' => $student_phone,
            'student_major' => $student_major,
            'student_class' => $student_class
        );

        $update = $this->AdminStudentUpdateModel->studentUpdate($student_id, $data);

        if ($update) { ?>
         <script>
                    alert('Update Success');
                    window.location.href = '<?=base_url('')?>AdminController/AdminStudentList';
                </script>
        <?php
        } else {?>
            <script>
                       alert('Update Error');
                       window.location.href = '<?=base_url('')?>AdminController/AdminStudentList';
                   </script>
           <?php
        }
    }
}

?>