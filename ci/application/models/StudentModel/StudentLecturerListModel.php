<?php

class StudentLecturerListModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getLecturers()
    {
        $sql=
        "
        SELECT
        CONCAT(l.lecturer_firstname,' ',l.lecturer_lastname) as lecturer_name,
        l.lecturer_email as lecturer_email,
        l.lecturer_id as lecturer_id,
        d.department_name as department_name,
        d.department_address as department_address
        
        FROM `lecturer` as l
        LEFT JOIN `department` as d
        ON (l.department_id=d.department_id) 
        
        ";
        return $this->db->query($sql)->result();
    }
}

?>