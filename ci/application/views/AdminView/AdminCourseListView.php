<?php
/* header */
$this->load->view('AdminView/AdminReqFiles/AdminHeader');
/* sidebar */
$this->load->view('AdminView/AdminReqFiles/AdminSideBar');
?>
<title>Admin Panel - 
<?=isset($courses)?'Course List':'Course Details'?>
</title>

<div class="content-wrapper">
    <!-- Content area -->
    <div class="content">

        <!-- Basic responsive configuration -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title"><?=isset($courses)?'Course List':'Course Details'?></h5>
                
            </div>
            <?php
            if (isset($courses)) { ?>
                <table class="table datatable-responsive" id="student-list">
                    <thead>
                        <tr>
                            <th>Course Number</th>
                            <th>Course Name</th>
                            <th>Department Name</th>
                            <th>Department Address</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($courses as $courses) { ?>
                            <tr>
                                <td><?= $courses->course_number ?></td>
                                <td><?= $courses->course_name ?></td>
                                <td><?= $courses->department_name ?></td>
                                <td><?= $courses->department_address ?></td>
                                <td>
                                    <a href="<?= base_url() . 'AdminController/AdminCourseList?courseDetail=' . $courses->course_number ?>" class="dropdown-item"><i class="icon-search4"></i>Course Details</a>
                                </td>
                            </tr>
                        <?php } ?>


                    </tbody>
                </table>
            <?php } if (isset($courseDetails)) { ?>
                <table class="table datatable-responsive" id="student-list">
                <thead>
                        <tr>
                            <th>Course Number</th>
                            <th>Course Name</th>
                            <th>Section ID</th>
                            <th>Department Name</th>
                            <th>Department Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($courseDetails as $courseDetails) { ?>
                            <tr>
                                <td><?= $courseDetails->course_number ?></td>
                                <td><?= $courseDetails->course_name ?></td>
                                <td><?= $courseDetails->section_id?></td>
                                <td><?= $courseDetails->department_name ?></td>
                                <td><?= $courseDetails->department_address ?></td>
                            </tr>
                        <?php } ?>


                    </tbody>
                </table>
            <?php } ?>

        </div>

        <!-- /basic responsive configuration -->
    </div>
</div>
<script>
    $('#student-list').dataTable({
        "searching": false,
        "lengthChange": false,
        "ordering": false
    });

    function deleteStudent(user_id) {
        var answer = window.confirm("Deleting User?");
        if (answer) {
            window.location.href = '<?= base_url('') ?>AdminController/AdminStudentList/deleteStudent?student_id=' + user_id + '';
        }
    }
</script>

<?php
$this->load->view('AdminView/AdminReqFiles/AdminFooter');
/* footer */

?>