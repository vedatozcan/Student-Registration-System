<?php

class LecturerStudentListModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getStudents($lecturer_id)
    {
        $sql=
        "
        SELECT s.student_id as student_id, 
        CONCAT(s.student_firstname,' ',s.student_lastname) as student_name, 
        sec.course_number as course_number, 
        s.student_birthdate as student_birthdate, 
        sec.semester as semester, 
        s.student_gender as gender, 
        s.student_email as studentEmail, 
        s.student_phone as studentPhone, 
        s.student_major as studentMajor, 
        s.student_class as studentClass 
        
        FROM `section` as `sec` 
        LEFT JOIN `take_section` as `takeSec` 
        ON (sec.section_id=takeSec.section_id) 
        
        LEFT JOIN `students` as `s` 
        ON (takeSec.student_id=s.student_id) 
        
        WHERE lecturer_id= '".$lecturer_id."' 
        ";
        return $this->db->query($sql)->result();
    }
    public function getStudentsSearch($studentName)
    {
        $sql=
        "
        SELECT s.student_id as student_id, 
        CONCAT(s.student_firstname,' ',s.student_lastname) as student_name, 
        sec.course_number as course_number, 
        s.student_birthdate as student_birthdate, 
        sec.semester as semester, 
        s.student_gender as gender, 
        s.student_email as studentEmail, 
        s.student_phone as studentPhone, 
        s.student_major as studentMajor, 
        s.student_class as studentClass 
        
        FROM `section` as `sec` 
        LEFT JOIN `take_section` as `takeSec` 
        ON (sec.section_id=takeSec.section_id) 
        
        LEFT JOIN `students` as `s` 
        ON (takeSec.student_id=s.student_id) 
        
        WHERE lecturer_id= '".$this->session->lecturer_id."' and
        CONCAT(student_firstname,student_lastname) LIKE '%" .$studentName."%'";
        return $this->db->query($sql)->result();
    }

  
}

?>