<?php

class StudentMyProfileModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function updateMe($id,$data)
    {
        $this->db->where('student_id',$id);
       return $this->db->update('students',$data);
    }
    public function getStudentInfo()
    {
        $sql="SELECT * FROM students WHERE student_id = '".$this->session->student_id."' ";
        return $this->db->query($sql)->row();
    }
    public function getStudentDepartment()
    {
        $sql="SELECT department_name FROM department WHERE department_id = '".$this->session->student_major."' ";
        return $this->db->query($sql)->row();
    }
    public function checkMail($mail)
    {
        $sql="SELECT student_email FROM students WHERE student_email = '".$mail."' and student_id!='".$this->session->student_id."' ";
        return $this->db->query($sql)->result();
    }
}

?>