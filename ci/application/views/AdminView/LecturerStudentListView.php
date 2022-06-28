<?php
/* header */
$this->load->view('AdminView/AdminReqFiles/AdminHeader');
/* sidebar */
$this->load->view('AdminView/AdminReqFiles/AdminSideBar');
?>
<title>Lecturer Panel - Student List</title>

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
                        <th>Student ID</th>
                        <th>Student Fullname</th>
                        <th>Student Course Number</th>
                        <th>Student Birthdate</th>
                        <th>Student Gender</th>
                        <th>Student Semester</th>
                        <th>Student Email</th>
                        <th>Student Phone</th>
                        <th>Student Major</th>
                        <th>Student Class</th>
                     
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($students as $students) { ?>
                        <tr>
                            <td><?= $students->student_id ?></td>
                            <td><?= $students->student_name ?></td>
                            <td><?= $students->course_number ?></td>
                            <td><?= $students->student_birthdate ?></td>
                            <td><?= $students->gender == '1' ? 'Female' : 'Male' ?></td>
                            <td><?= $students->semester ?></td>
                            <td><?= $students->studentEmail ?></td>
                            <td><?= $students->studentPhone ?></td>
                            <td><?= $students->studentMajor ?></td>
                            <td><?=$students->studentClass?></td>

                     
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