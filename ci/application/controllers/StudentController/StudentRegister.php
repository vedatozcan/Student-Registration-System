<?php

class StudentRegister extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("StudentModel/StudentRegisterModel");
    }
    public function index()
    {
        $data['departments'] = $this->StudentRegisterModel->getDepartment();
        $data['action'] = base_url() . 'StudentController/StudentRegister/studentAdd';
        $this->load->view("StudentView/StudentRegisterView", $data);
    }

    public function studentAdd()
    {
        $student_username = $this->input->post("student_username");
        $student_firstname = $this->input->post("student_firstname");
        $student_lastname = $this->input->post("student_lastname");
        $student_password = $this->input->post("student_password");
        $repass = $this->input->post("repass");
        $student_email = $this->input->post("student_email");
        $student_phone = $this->input->post("student_phone");
        $student_birthdate = $this->input->post("student_birthdate");
        $student_major = $this->input->post("student_major");
        $student_class = $this->input->post("student_class");
        $student_gender = $this->input->post("student_gender");

        $checkExistMail = $this->StudentRegisterModel->checkMail($student_email);
        $checkExistUsername = $this->StudentRegisterModel->checkUsername($student_username);

        if ($repass == $student_password) {
            if (count($checkExistMail) == 0 && count($checkExistUsername) == 0) {
                $data = array(
                    'student_username' => $student_username,
                    'student_firstname' => $student_firstname,
                    'student_lastname' => $student_lastname,
                    'student_password' => md5($student_password),
                    'student_email' => $student_email,
                    'student_phone' => $student_phone,
                    'student_birthdate' => $student_birthdate,
                    'student_major' => $student_major,
                    'student_class' => $student_class,
                    'student_gender' => $student_gender
                );

                $studentAdd = $this->StudentRegisterModel->StudentAdd($data, 'students');
                if ($studentAdd) { ?>
                    <script>
                        alert('Account Register Success');
                        window.location.href = '<?= base_url() . 'StudentController/StudenLogin/' ?>';
                    </script>
                <?php } else {
                ?>
                    <script>
                        alert('Account Register Error');
                        window.location.href = '<?= base_url() . 'StudentController/StudentRegister/' ?>';
                    </script>
                <?php
                }
            } else { ?>
                <script>
                    alert('This E-Mail or Username Used by Another Account');
                    window.location.href = '<?= base_url() . 'StudentController/StudentRegister/' ?>';
                </script>
            <?php }
        } else { ?>
            <script>
                alert('Passwords Not Match');
                window.location.href = '<?= base_url() . 'StudentController/StudentRegister/' ?>';
            </script>
<?php }
    }
}

?>