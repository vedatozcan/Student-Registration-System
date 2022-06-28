<?php

class StudentCourses extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("StudentModel/StudentCourseModel", "StudentCourseModel");
    }
    public function index()
    {
        $data['action'] = base_url() . 'StudentController/StudentCourses/addSection';
        $data['studentAvailableCourse'] = $this->availableSections();
        $data['registeredCourses'] = $this->StudentCourseModel->studentRegisteredCourses();
        $this->load->view("StudentView/StudentCourseView", $data);
    }
    public function getData()
    {
        $a = $this->StudentCourseModel->studentRegisteredCourses();
        $sql = "SELECT * FROM `course` WHERE department_id='" . $this->session->student_major . "'  ";
        if (count($a) >= 1) {
            $sql .= "and course_number NOT IN (";
            foreach ($a as $a) {
                $sql .= "'$a->course_number',";
            }
            $sql .= "'')";
        } else {
        }


        return $this->db->query($sql)->result();
    }
    public function availableSections()
    {
        $b = $this->getData();
        $sql = "SELECT
        
        CONCAT(l.lecturer_firstname,' ',l.lecturer_lastname) as lectName,
        c.course_number as courseNumber,
        c.course_name as course_name,
        c.credit as credit,
        s.semester as semester,
        s.section_id as section_id


        FROM `course` as c
        LEFT JOIN `section` as s
        ON (c.course_number=s.course_number)
        LEFT JOIN `lecturer` as l
        ON (s.lecturer_id=l.lecturer_id)

        WHERE c.department_id = '" . $this->session->student_major . "'
        ";
        $sql .= "and c.course_number IN (";
        foreach ($b as $a) {
            $sql .= "'$a->course_number',";
        }
        $sql .= "'')";
        return $this->db->query($sql)->result();
    }

    public function addSection()
    {
        $section_id = $this->input->post("section_id");
        $student_id = $this->session->student_id;
        $data = array(
            'section_id' => $section_id,
            'student_id' => $student_id
        );
        $sectionAdd = $this->StudentCourseModel->sectionAdd($data, 'take_section');
        if ($sectionAdd) { ?>
            <script>
                alert('Account Register Success');
                window.location.href = '<?= base_url() . 'StudentController/StudentCourses/' ?>';
            </script>
        <?php } else {
        ?>
            <script>
                alert('Account Register Error');
                window.location.href = '<?= base_url() . 'StudentController/StudentCourses/' ?>';
            </script>
<?php
        }
    }
}
