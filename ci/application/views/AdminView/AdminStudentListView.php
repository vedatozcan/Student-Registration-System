<?php
/* header */
$this->load->view('AdminView/AdminReqFiles/AdminHeader');
/* sidebar */
$this->load->view('AdminView/AdminReqFiles/AdminSideBar');
?>
<title>Admin Panel - Student List</title>

<div class="content-wrapper">
    <!-- Content area -->
    <div class="content">

        <!-- Basic responsive configuration -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Student List</h5>
                <div class="header-elements">


                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <form action="" method="GET">
                                <div style="display: flex;">

                                    <input type="text" class="form-control" name="search" placeholder="Student Name" <?= isset($searchWord)?"value='".$searchWord."'":'' ?> >

                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>


                            </form>
                        </div>


                    </div>


                </div>
            </div>
            <table class="table datatable-responsive" id="student-list">
                <thead>
                    <tr>
                        <th>Student First Name</th>
                        <th>Student Last Name</th>
                        <th>Student Username</th>
                        <th>Student Birthdate</th>
                        <th>Student Gender</th>
                        <th>Student Email</th>
                        <th>Student Phone</th>
                        <th>Student Major</th>
                        <th>Student Class</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($students as $students) { ?>
                        <tr>
                            <td><?= $students->student_firstname ?></td>
                            <td><?= $students->student_lastname ?></td>
                            <td><?= $students->student_username ?></td>
                            <td><?= $students->student_birthdate ?></td>
                            <td><?= $students->student_gender == '1' ? 'Female' : 'Male' ?></td>
                            <td><?= $students->student_email ?></td>
                            <td><?= $students->student_phone ?></td>
                            <td><?= $students->student_major ?></td>
                            <td><?= $students->student_class ?></td>

                            <td class="text-center">
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
                            </td>
                        </tr>
                    <?php } ?>


                </tbody>
            </table>
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