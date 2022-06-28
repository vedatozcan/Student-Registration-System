<?php

class AdminCourseListModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getCourse()
    {
        $sql=
        "
        SELECT
        c.course_number as course_number,
        c.course_name as course_name,
        d.department_name as department_name,
        d.department_address as department_address
        FROM `course` as c
        LEFT JOIN `department` as d
        ON (c.department_id=d.department_id)
        
        ";
        return $this->db->query($sql)->result();
    }
    public function getCourseDetails($course_id)
    {
        $sql=
        "
        SELECT
        c.course_number as course_number,
        c.course_name as course_name,
        d.department_name as department_name,
        d.department_address as department_address,
        section.section_id as section_id
        FROM `section` as section
        LEFT JOIN `course` as c
        ON section.course_number=c.course_number
        LEFT JOIN `department` as d
        ON (c.department_id=d.department_id)
        WHERE section.course_number= '".$course_id."'
        
        ";
        return $this->db->query($sql)->result();
    }
  
}

?>