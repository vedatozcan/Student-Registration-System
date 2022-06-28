<?php

class LecturerSectionList extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("AdminModel/LecturerSectionListModel");
    }
    public function index()
    {
        $lecturer_id = $this->session->lecturer_id;
        if ($this->input->get('sectionDetail') != null || $this->input->get('sectionDetail') != '') {
            $data['sectionStudentUpdate'] = base_url() . 'AdminController/LecturerSectionList/updateStudentSection';
            $data['sectionDetails'] = $this->LecturerSectionListModel->getSectionDetails($this->input->get('sectionDetail'), $lecturer_id);
            $data['header']= 'Section Details';
            $data['backMysection']= '
            <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div style="display: flex;">
                                <a href="'.base_url().'AdminController/LecturerSectionList" class="btn btn-primary">Return My Sections</a>
                            </div>
                        </div>


                    </div>
            
            ';
            $this->load->view("AdminView/LecturerSectionListView", $data);
        } elseif ($this->input->get('sectionDetail') == '' && null !== ($this->input->get('sectionDetail'))) {
            redirect('AdminController/LecturerSectionList');
        } else {
            $data['sections'] = $this->LecturerSectionListModel->getSection($lecturer_id);
            $data['header']= 'My Sections';
            $this->load->view("AdminView/LecturerSectionListView", $data);
        }
    }
    public function updateStudentSection()
    {
        $student_id = $this->input->post("student_id");
        $absenteeism = $this->input->post("absenteeism");
        $grade = $this->input->post("grade");

        $data = array(
            'absenteeism' => $absenteeism,
            'grade' => $grade
        );

        $update = $this->LecturerSectionListModel->studentUpdate($student_id, $data);

        if ($update) { ?>
            <script>
                alert('Update Success');
                window.location.href = '<?= base_url('') ?>AdminController/LecturerSectionList';
            </script>
        <?php
        } else { ?>
            <script>
                alert('Update Error');
                window.location.href = '<?= base_url('') ?>AdminController/LecturerSectionList';
            </script>
<?php
        }
    }
}




?>