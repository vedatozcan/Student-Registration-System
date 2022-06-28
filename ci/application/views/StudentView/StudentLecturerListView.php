<?php
$this->load->view('StudentView/StudentReqFiles/StudentHeader');
?>

<div class="container-fluid">
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Lecturer List</h1>
        <p class="lead">Lecturer List</p>
    </div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Lecturer Fullname</th>
                <th scope="col">Lecturer E-Mail</th>
                <th scope="col">Lecturer Department</th>
                <th scope="col">Department Address</th>
            </tr>
        </thead>
        <tbody>
        <?php
                    foreach ($lecturers as $lecturers) { ?>
                        <tr>
                            <th scope="row"><?= $lecturers->lecturer_name ?></th>
                            <th><?= $lecturers->lecturer_email ?></th>
                            <th><?= $lecturers->department_name ?></th>
                            <th><?= $lecturers->department_address ?></th>

                           
                        </tr>
                    <?php } ?>
        </tbody>
    </table>
</div>



<?php $this->load->view('StudentView/StudentReqFiles/StudentFooter') ?>