<?php
/* header */
$this->load->view('AdminView/AdminReqFiles/AdminHeader');
/* sidebar */
$this->load->view('AdminView/AdminReqFiles/AdminSideBar');
?>
<title>Admin Panel - <?=$header?></title>

<div class="content-wrapper">
    <!-- Content area -->
    <div class="content">

        <!-- Basic responsive configuration -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title"><?=$header?></h5>
                <div class="header-elements">


                    <?=isset($backMysection)?$backMysection:''?>


                </div>
            </div>

            <?php

            if (isset($sections)) { ?>
                <table class="table datatable-responsive" id="student-list">
                    <thead>
                        <tr>
                            <th>Course Number</th>
                            <th>Section ID</th>
                            <th>Semester</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($sections as $sections) { ?>
                            <tr>
                                <td><?= $sections->course_number ?></td>
                                <td><?= $sections->section_id ?></td>
                                <td><?= $sections->semester ?></td>
                                <td>
                                    <a href="<?= base_url() . 'AdminController/LecturerSectionList?sectionDetail=' . $sections->section_id ?>" class="dropdown-item"><i class="icon-search4"></i>Section Details</a>
                                </td>
                            </tr>
                        <?php } ?>


                    </tbody>
                </table>
            <?php }

            if (isset($sectionDetails)) { ?>
                <table class="table datatable-responsive" id="student-list">
                    <thead>
                        <tr>
                            <th>student_id</th>
                            <th>student_name</th>
                            <th>student_birthdate</th>
                            <th>semester</th>
                            <th>studentEmail</th>
                            <th>studentPhone</th>
                            <th>studentMajor</th>
                            <th>studentClass</th>
                            <th>absenteeism</th>
                            <th>grade</th>


                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($sectionDetails as $sectionDetails) { ?>
                            <tr>


                                <td><?= $sectionDetails->student_id ?></td>
                                <td><?= $sectionDetails->student_name ?></td>
                                <td><?= $sectionDetails->student_birthdate ?></td>
                                <td><?= $sectionDetails->semester ?></td>
                                <td><?= $sectionDetails->studentEmail ?></td>
                                <td><?= $sectionDetails->studentPhone ?></td>
                                <td><?= $sectionDetails->studentMajor ?></td>
                                <td><?= $sectionDetails->studentClass ?></td>
                                <form method="POST" action="<?= $sectionStudentUpdate ?>">
                                    <input name="student_id" type="hidden" value="<?= $sectionDetails->student_id ?>">
                                    <td><input type="number" name="absenteeism" value="<?= $sectionDetails->absenteeism ?>"></td>
                                    <td><input type="text" name="grade" value="<?= $sectionDetails->grade ?>"></td>

                                    <td>
                                        <button type="submit" class="dropdown-item"><i class="icon-search4"></i>Update</button>
                                    </td>
                                </form>
                            </tr>

                        <?php } ?>


                    </tbody>
                </table>
            <?php }
            ?>
        </div>
        <div class="modal fade" id="modaLecturer" tabindex="-1" role="dialog" aria-labelledby="modaLecturerLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modaLecturerLabel">New Lecturer</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= $lectAdd ?>" method="POST">
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Lecturer Firstname:</label>
                                <input class="form-control" id="message-text" name="lecturer_firstname">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Lecturer Lastname:</label>
                                <input class="form-control" id="message-text" name="lecturer_lastname">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Lecturer Email:</label>
                                <input class="form-control" id="message-text" name="lecturer_email">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Lecturer Password:</label>
                                <input class="form-control" id="message-text" name="lecturer_password">
                            </div>

                            <div class="form-group">
                                <label for="lecturer-department" class="col-form-label">Department:</label>
                                <select class="custom-select" name="lecturer_department" id="lecturer_department">

                                    <?php foreach ($departments as $departments) { ?>
                                        <option value="<?= $departments->department_id ?>"><?= $departments->department_name ?></option>
                                    <?php } ?>


                                </select>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Register Lecturer</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
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