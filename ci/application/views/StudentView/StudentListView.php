<?php
$this->load->view('StudentView/StudentReqFiles/StudentHeader');
?>

<div class="container-fluid">
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Student List</h1>
        <p class="lead">Student List</p>
    </div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Student Firstname</th>
                <th scope="col">student_lastname</th>
                <th scope="col">student_email</th>
                <th scope="col">department_name</th>
                <th scope="col">student_class</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($students as $students){ ?>
            <tr>
                <th scope="row"><?=$students->student_firstname?></th>
                <th><?=$students->student_lastname?></th>
                <th><?=$students->student_email?></th>
                <th><?=$students->department_name?></th>
                <th><?=$students->student_class?></th>
            </tr>
            <?php }?>
        </tbody>
    </table>
</div>



<?php $this->load->view('StudentView/StudentReqFiles/StudentFooter') ?>