<?php

class StudentLogin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("StudentModel/StudentLoginModel", "StudentLoginModel");
    }
    public function index()
    {
        if ($this->input->get('status') != null || $this->input->get('status') != '') {
            $data['status'] = $this->input->get('status');
        }
        $data['action'] = base_url() . "StudentController/StudentLogin/auth";
        $this->load->view("StudentView/StudentLoginView", $data);
    }
    public function auth()
    {
        $student_username = $this->input->post('student_username');
        $student_password = md5($this->input->post('student_password'));
        $login = $this->StudentLoginModel->_StudentLogin($student_username, $student_password);
        if ($login) {
            /*   print_r($login); */
            $session = array(
                'signed' => '1',
                'student_id' => $login->student_id,
                'student_firstname' => $login->student_firstname,
                'student_lastname' => $login->student_lastname,
                'student_major' => $login->student_major
            );
            $this->session->set_userdata($session);
            redirect(base_url() . 'StudentController/StudentHome');
        } else { ?>
        <script>
            alert('Your Login Informations Not Correct');
            window.location.href= '<?=base_url().'StudentController/StudentLogin'?>';
        </script>
        <?php

        }
    }
}
