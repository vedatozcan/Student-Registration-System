<?php

class StudentMyProfile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("StudentModel/StudentMyProfileModel");
    }
    public function index()
    {
        $data['userInfo'] = $this->StudentMyProfileModel->getStudentInfo();
        $data['department'] = $this->StudentMyProfileModel->getStudentDepartment();
        $data['action'] = base_url() . "StudentController/StudentMyProfile/updateStudentData";
        $this->load->view("StudentView/StudentMyProfileView", $data);
    }
    public function updateStudentData()
    {
        $student_id = $this->session->student_id;
        $student_email = $this->input->post("student_email");
        $student_telephone = $this->input->post("student_telephone");
        $student_password = $this->input->post("student_password");
        $student_repassword = $this->input->post("student_repassword");

        $check = $this->StudentMyProfileModel->checkMail($student_email);

        if (count($check)<1) {
            if (!empty($student_password) && !empty($student_repassword)) {
                if ($student_password == $student_repassword) {
                    $student_password = md5($student_password);
                    $data = array(
                        'student_email' => $student_email,
                        'student_phone' => $student_telephone,
                        'student_password' => $student_password

                    );

                    $update = $this->StudentMyProfileModel->updateMe($student_id, $data);

                    if ($update) { ?>
                        <script>
                            alert('Update Success');
                            window.location.href = '<?= base_url('') ?>StudentController/StudentMyProfile';
                        </script>
                    <?php
                    } else { ?>
                        <script>
                            alert('Update Error');
                            window.location.href = '<?= base_url('') ?>StudentController/StudentMyProfile';
                        </script>
                    <?php
                    }
                } else {
                    ?>
                    <script>
                        alert('Passwords Not Match');
                        window.location.href = '<?= base_url('') ?>StudentController/StudentMyProfile';
                    </script>
                <?php
                }
            } else {
                $data = array(
                    'student_email' => $student_email,
                    'student_phone' => $student_telephone
                );

                $update = $this->StudentMyProfileModel->updateMe($student_id, $data);

                if ($update) { ?>
                    <script>
                        alert('Update Success');
                        window.location.href = '<?= base_url('') ?>StudentController/StudentMyProfile';
                    </script>
                <?php
                } else { ?>
                    <script>
                        alert('Update Error');
                        window.location.href = '<?= base_url('') ?>StudentController/StudentMyProfile';
                    </script>
            <?php
                }
            }
        } else {
            ?>
            <script>
                alert('Email Exist Try Another Email');
                window.location.href = '<?= base_url('') ?>StudentController/StudentMyProfile';
            </script>
<?php
        }
    }
}

?>