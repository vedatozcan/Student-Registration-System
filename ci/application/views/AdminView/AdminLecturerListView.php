<?php
/* header */
$this->load->view('AdminView/AdminReqFiles/AdminHeader');
/* sidebar */
$this->load->view('AdminView/AdminReqFiles/AdminSideBar');
?>
<title>Admin Panel - Lecturer List</title>

<div class="content-wrapper">
    <!-- Content area -->
    <div class="content">

        <!-- Basic responsive configuration -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Lecturer List</h5>
                <div class="header-elements">


                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div style="display: flex;">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modaLecturer">Add Lecturer</button>
                            </div>
                        </div>


                    </div>


                </div>
            </div>
            <table class="table datatable-responsive" id="student-list">
                <thead>
                    <tr>
                        <th>Lecturer Name-Surname</th>
                        <th>Lecturer Email</th>
                        <th>Lecturer Department Name</th>
                        <th>Lecturer Department Addr</th>
                        <!-- <th class="text-center">Actions</th> -->
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($lecturers as $lecturers) { ?>
                        <tr>
                            <td><?= $lecturers->lecturer_name ?></td>
                            <td><?= $lecturers->lecturer_email ?></td>
                            <td><?= $lecturers->department_name ?></td>
                            <td><?= $lecturers->department_address ?></td>

                            <!--  <td class="text-center">
                                <div class="list-icons">
                                    <div class="dropdown">
                                        <a href="#" class="list-icons-item" data-toggle="dropdown">
                                            <i class="icon-menu9"></i>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="<?= base_url('') . "AdminController/AdminStudentUpdate?student_id=" . $students->student_id ?>" class="dropdown-item"><i class="icon-file-excel"></i> Update Student</a>
                                            <a class="dropdown-item" onclick="deleteStudent(<?= $students->student_id ?>)"><i class="icon-file-pdf"></i> Delete Student</a>
                                        </div>
                                    </div>
                                </div>
                            </td> -->
                        </tr>
                    <?php } ?>


                </tbody>
            </table>
        </div>
        <!-- /basic responsive configuration -->
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