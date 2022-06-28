<?php

class AdminStudentUpdateModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

   public function getStudentInfo($student_id)
   {
       $sql="SELECT * FROM students as s 
       LEFT JOIN department as d
       on s.student_major=d.department_id 
       WHERE s.student_id = '".$student_id."'
        ";
       return $this->db->query($sql)->row();
   }

   

   public function studentUpdate($id,$data)
   {
       $this->db->where('student_id',$id);
       return $this->db->update('students',$data);
   }
   public function getDepartment()
    {
        $sql=
        "SELECT * FROM `department` ";
        return $this->db->query($sql)->result();
    }

  
}

?>