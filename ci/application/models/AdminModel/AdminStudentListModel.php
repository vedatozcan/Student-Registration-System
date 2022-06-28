<?php

class AdminStudentListModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getStudents()
    {
        $sql=
        "
        SELECT * FROM students";
        return $this->db->query($sql)->result();
    }
    public function getStudentsSearch($studentName)
    {
        $sql=
        "
        SELECT * FROM students
        WHERE"
        . (isset($studentName) ? "  CONCAT(student_firstname,student_lastname) LIKE '%" .$studentName."%'" : "")
        ."";
        return $this->db->query($sql)->result();
    }
    
    public function deleteStudent($student_id)
    {
        $this->db->where("student_id",$student_id);
        return $this->db->delete("students");
    }

    public function verifyAccount($student_id)
    {
        $sql="
        SELECT student_id FROM students WHERE student_id = '".$student_id."'
        ";
        return $this->db->query($sql)->result();
    }
  
}

?>