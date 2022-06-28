<?php
/* header */
$this->load->view('AdminView/AdminReqFiles/AdminHeader'); ?>
<script src="<?= base_url() ?>assets/global_assets/js/plugins/forms/selects/select2.min.js"></script>
<script src="<?= base_url() ?>assets/global_assets/js/plugins/forms/styling/uniform.min.js"></script>
<script src="<?= base_url() ?>assets/global_assets/js/demo_pages/form_layouts.js"></script>
<?php /* sidebar */
$this->load->view('AdminView/AdminReqFiles/AdminSideBar');
?>
<title>Admin Panel - Student Update</title>

<div class="content-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="card">
                            <div class="card-header header-elements-inline">
                                <h5 class="card-title">Update Student : <?= $userInfo->student_firstname . ' ' . $userInfo->student_lastname ?> </h5>
                               
                            </div>
                            <div class="card-body">
                                <form action="<?= $action ?>" method="POST">
                                <input type="hidden" name="student_id" value="<?=$userInfo->student_id?>">
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Enter Student First Name:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" value="<?= $userInfo->student_firstname ?>" name="student_firstname">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Enter Student Last Name</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" value="<?= $userInfo->student_lastname ?>" name="student_lastname">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Student Username</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" value="<?= $userInfo->student_username ?>" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Enter Student Birthdate:</label>
                                        <div class="col-lg-9">
                                            <input type="date" class="form-control" value="<?= $userInfo->student_birthdate ?>" name="student_birthdate">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Select Student Gender:</label>
                                        <div class="col-lg-9">
                                            <select class="custom-select" name="student_gender">
                                                <?php 
                                                if($userInfo->student_gender=='1'){
                                                    echo '<option value="1" selected>Female</option>';
                                                    echo '<option value="0">Male</option>';
                                                }
                                                else{
                                                    echo '<option value="0" selected>Male</option>';
                                                    echo '<option value="1" >Female</option>';
                                                }
                                                
                                                ?>
                                               
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Enter Student E-Mail:</label>
                                        <div class="col-lg-9">
                                            <input type="email" class="form-control" value="<?= $userInfo->student_email ?>">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Enter Student Phone:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="student_phone" value="<?= $userInfo->student_phone ?>">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Enter Student Major:</label>
                                        <div class="col-lg-9">
                                        <select class="custom-select" name="student_major">
                                                    <option value="<?= $userInfo->student_major ?>" aria-readonly="true" selected><?= $userInfo->department_name ?></option>
                                                    <?php foreach ($departments as $departments) { ?>
                                                        <option value="<?= $departments->department_id ?>"><?= $departments->department_name ?></option>
                                                    <?php } ?>


                                                </select>
                                            
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Enter Student Class:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="student_class" value="<?= $userInfo->student_class ?>">
                                        </div>
                                    </div>

                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary">Student Info Update <i class="icon-paperplane ml-2"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php
$this->load->view('AdminView/AdminReqFiles/AdminFooter');
/* footer */

?>