<?php

class StudentRegisterModel extends CI_Model{

    public function __construct() {
        parent::__construct();
    }
    public function studentAdd($data=array(),$where){
        return $this->db->insert($where,$data);
    }
    public function checkMail($email)
    {
        $sql=
        "SELECT `student_email` FROM students WHERE student_email = '".$email."' ";
        return $this->db->query($sql)->result();
    }
    public function checkUsername($username)
    {
        $sql=
        "SELECT `student_username` FROM students WHERE student_username = '".$username."' ";
        return $this->db->query($sql)->result();
    }
    public function getDepartment()
    {
        $sql=
        "SELECT * FROM `department` ";
        return $this->db->query($sql)->result();
    }
}


?>