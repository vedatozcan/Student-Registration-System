<?php

class StudentListModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function studentList()
    {
        $sql = "SELECT * FROM `students` as s LEFT JOIN `department` as d ON (s.student_major= d.department_id) ";
        return $this->db->query($sql)->result();
    }
}

?>