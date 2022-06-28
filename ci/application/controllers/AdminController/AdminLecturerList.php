<?php

class AdminLecturerList extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("AdminModel/AdminLecturerListModel");
    }
    public function index()
    {
        $data['lectAdd'] = base_url() . 'AdminController/AdminLecturerList/lectAdd';
        $data['lecturers'] = $this->AdminLecturerListModel->getLecturers();
        $data['departments'] = $this->AdminLecturerListModel->getDepartment();
        $this->load->view("AdminView/AdminLecturerListView", $data);
    }
    public function lectAdd()
    {
        $lecturer_firstname = $this->input->post("lecturer_firstname");
        $lecturer_lastname = $this->input->post("lecturer_lastname");
        $lecturer_email = $this->input->post("lecturer_email");
        $lecturer_password = $this->input->post("lecturer_password");
        $lecturer_department = $this->input->post("lecturer_department");
        $checkExist = $this->AdminLecturerListModel->checkMail($lecturer_email);

        if (count($checkExist) == 0) {
            $dataLectTable = array(
                'lecturer_firstname' => $lecturer_firstname,
                'lecturer_lastname' => $lecturer_lastname,
                'lecturer_email' => $lecturer_email,
                'department_id' => $lecturer_department
            );

            $lecturerTableAdd = $this->AdminLecturerListModel->lecturerAdd($dataLectTable, 'lecturer');

            if ($lecturerTableAdd) {
                $dataAdminLect = array(
                    'admin_mail' => $lecturer_email,
                    'admin_password' => md5($lecturer_password),
                    'admin_role' => '1',
                    'lecturer_id' => $lecturerTableAdd

                );
                $adminTableAdd = $this->AdminLecturerListModel->lecturerAdd($dataAdminLect, 'admin');
                if ($adminTableAdd) { ?>
                    <script>
                        alert('Lecturer Register Succesfull');
                        window.location.href = '<?= base_url('') ?>AdminController/AdminLecturerList';
                    </script>
                <?php } else { ?>
                    <script>
                        alert('Lecturer Register Error');
                        window.location.href = '<?= base_url('') ?>AdminController/AdminLecturerList';
                    </script>
                <?php }
            } else { ?>
                <script>
                    alert('An error occurred');
                    window.location.href = '<?= base_url('') ?>AdminController/AdminLecturerList';
                </script>
            <?php }
        } else { ?>
            <script>
                alert('This E-Mail Used by Another Account');
                window.location.href = '<?= base_url('') ?>AdminController/AdminLecturerList';
            </script>
        <?php }
    }
}
