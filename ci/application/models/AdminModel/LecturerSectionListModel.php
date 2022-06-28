<?php

class LecturerSectionListModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getSection($lecturer_id)
    {
        $sql= "SELECT * FROM section WHERE lecturer_id='".$lecturer_id."'";
        return $this->db->query($sql)->result();
    }



    public function getSectionDetails($section_id,$lecturer_id)
    {
        $sql=
        "
        SELECT s.student_id as student_id,
        CONCAT(s.student_firstname,' ',s.student_lastname) as student_name, 
        sec.course_number as course_number, 
        s.student_birthdate as student_birthdate, 
        takeSec.absenteeism as absenteeism, 
        takeSec.grade as grade, 
        sec.section_id as section_id, 
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
        
        WHERE lecturer_id= '".$lecturer_id."' AND sec.section_id='".$section_id."'
        ";
        return $this->db->query($sql)->result();
    }

    public function studentUpdate($id,$data)
    {
        $this->db->where('student_id',$id);
        return $this->db->update('take_section',$data);
    }
    
  
}

?>