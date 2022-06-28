<?php

class AdminLoginModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function _AdminLogin($adminMail,$password)
    {
        $sql = "SELECT * FROM admin WHERE admin_mail ='".$adminMail."' and admin_password ='".$password."' ";
        return $this->db->query($sql)->row();
    }

    public function LecturerInfo($lecturer_id)
    {
        $sql = "SELECT * FROM lecturer where lecturer_id= '".$lecturer_id."'";
        return $this->db->query($sql)->row();
    }
}

?>