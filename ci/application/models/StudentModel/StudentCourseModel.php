<?php

class StudentCourseModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function studentRegisteredCourses()
    {
        $sql = "SELECT
        *
        FROM `course` as c 
        LEFT JOIN `department` as d 
        ON (c.department_id= d.department_id) 
        LEFT JOIN `section` as s
        ON (s.course_number=c.course_number)
        LEFT JOIN `lecturer` as l
        ON(l.lecturer_id=s.lecturer_id)
        LEFT JOIN `take_section` as t
        ON (t.section_id=s.section_id)
        LEFT JOIN `students` as student
        ON (t.student_id=student.student_id)
        
        WHERE t.student_id='".$this->session->student_id."'
        
        ";
        return $this->db->query($sql)->result();
    }
    public function sectionAdd($data=array(),$where){
        return $this->db->insert($where,$data);
    }
}

?>