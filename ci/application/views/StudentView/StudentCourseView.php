<?php
$this->load->view('StudentView/StudentReqFiles/StudentHeader');
?>

<div class="container-fluid">
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Available Section-Course List</h1>
        <p class="lead">Available Section-Course List</p>
    </div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">courseNumber</th>
                <th scope="col">course_name</th>
                <th scope="col">section_id</th>
                <th scope="col">lectName</th>
                <th scope="col">credit</th>
                <th scope="col">semester</th>
                <th scope="col">Register</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($studentAvailableCourse as $studentAvailableCourse) { ?>
                <tr>


                    <th scope="row"><?= $studentAvailableCourse->courseNumber ?></th>
                    <th><?= $studentAvailableCourse->course_name ?></th>
                    <th><?= $studentAvailableCourse->section_id ?></th>
                    <th><?= $studentAvailableCourse->lectName ?></th>
                    <th><?= $studentAvailableCourse->credit ?></th>
                    <th><?= $studentAvailableCourse->semester ?></th>
                    <form action="<?= $action ?>" method="POST">
                        <input name="section_id" value="<?= $studentAvailableCourse->section_id ?>" type="hidden">
                        <th><button type="submit" class="btn btn-success">Register</button></th>
                    </form>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<hr>
<div class="container-fluid">
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Registered Section-Course List</h1>
        <p class="lead">Registered Section-Course List</p>
    </div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Course Number</th>
                <th scope="col">Course Name</th>
                <th scope="col">Course Credit</th>
                <th scope="col">Section ID</th>
                <th scope="col">Semester</th>
                <th scope="col">Grade</th>
                <th scope="col">Absenteeism</th>
                <th scope="col">Lecturer Fullname</th>
                <th scope="col">Lecturer Email</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($registeredCourses as $registeredCourses) { ?>
                <tr>
                    <th scope="row"><?= $registeredCourses->course_number ?></th>
                    <th><?= $registeredCourses->course_name ?></th>
                    <th><?= $registeredCourses->credit ?></th>
                    <th><?= $registeredCourses->section_id ?></th>
                    <th><?= $registeredCourses->semester ?></th>
                    <th><?= $registeredCourses->grade ?></th>
                    <th><?= $registeredCourses->absenteeism ?></th>
                    <th><?= $registeredCourses->lecturer_firstname ?> <?= $registeredCourses->lecturer_lastname ?></th>
                    <th><?= $registeredCourses->lecturer_email ?></th>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>



<?php $this->load->view('StudentView/StudentReqFiles/StudentFooter') ?>