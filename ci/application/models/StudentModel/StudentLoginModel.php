<?php

class StudentLoginModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function _StudentLogin($studentMail,$password)
    {
        $sql = "SELECT * FROM `students` WHERE `student_username` ='".$studentMail."' and `student_password` ='".$password."' ";
        return $this->db->query($sql)->row();
    }
}

?>