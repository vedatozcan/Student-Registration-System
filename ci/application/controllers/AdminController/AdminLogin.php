<?php

class AdminLogin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("AdminModel/AdminLoginModel", "AdminLoginModel");
    }
    public function index()
    {
        $data['action'] = base_url() . "AdminController/AdminLogin/auth";
        $this->load->view("AdminView/AdminLoginView", $data);
    }
    public function auth()
    {
        $admin_mail = $this->input->post('admin_mail');
        $admin_password = md5($this->input->post('admin_password'));
        $login = $this->AdminLoginModel->_adminLogin($admin_mail, $admin_password);
        if ($login) {
            if ($login->admin_role == '0') {
                $session = array(
                    'admin_mail' => $login->admin_mail,
                    'admin_role' => 'admin',
                    'signed' => '1'
                );
                $this->session->set_userdata($session);
                redirect('AdminController/AdminHome');
            }
            else{
                $lect= $this->AdminLoginModel->LecturerInfo($login->lecturer_id);
                $session = array(
                    'signed' => '1',
                    'admin_role' => 'lecturer',
                    'lecturer_firstname' => $lect->lecturer_firstname,
                    'lecturer_lastname' => $lect->lecturer_lastname,
                    'department_id' => $lect->department_id,
                    'lecturer_id' => $lect->lecturer_id

                );
                $this->session->set_userdata($session);
                redirect('AdminController/LecturerHome');
            }
          
        } else {
            redirect('AdminController/AdminLogin?status=wrongInfos');
        }
    }
}
