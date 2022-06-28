<!DOCTYPE html>
<html lang="en">
<?php $this->session->sess_destroy(); ?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Student Register</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>assets/global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>assets/global_assets/css/icons/material/styles.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>assets/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>assets/assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>assets/assets/css/layout.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>assets/assets/css/components.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>assets/assets/css/colors.min.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="<?= base_url() ?>assets/global_assets/js/main/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/global_assets/js/main/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/global_assets/js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="<?= base_url() ?>assets/global_assets/js/plugins/forms/styling/uniform.min.js"></script>

    <script src="<?= base_url() ?>assets/assets/js/app.js"></script>
    <script src="<?= base_url() ?>assets/global_assets/js/demo_pages/login.js"></script>
    <!-- /theme JS files -->

</head>

<body>



    <!-- Page content -->
    <div class="page-content">

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Content area -->
            <div class="content d-flex justify-content-center align-items-center">

                <!-- Registration form -->
                <form action="<?=$action?>" method="POST" class="flex-fill">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <div class="text-center mb-3">
                                        <i class="icon-plus3 icon-2x text-success border-success border-3 rounded-round p-3 mb-3 mt-1"></i>
                                        <h5 class="mb-0">Create Student Account</h5>
                                        <span class="d-block text-muted">All fields are required</span>
                                    </div>

                                    <div class="form-group form-group-feedback form-group-feedback-right">
                                        <input type="text" class="form-control" name="student_username" placeholder="Choose username">
                                        <div class="form-control-feedback">
                                            <i class="icon-user-plus text-muted"></i>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group form-group-feedback form-group-feedback-right">
                                                <input type="text" class="form-control" name="student_firstname" placeholder="First name" required>
                                                <div class="form-control-feedback">
                                                    <i class="icon-user-check text-muted"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group form-group-feedback form-group-feedback-right">
                                                <input type="text" class="form-control" name="student_lastname" placeholder="Last name" required>
                                                <div class="form-control-feedback">
                                                    <i class="icon-user-check text-muted"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group form-group-feedback form-group-feedback-right">
                                                <input type="password" class="form-control" name="student_password" placeholder="Create password" required>
                                                <div class="form-control-feedback">
                                                    <i class="icon-user-lock text-muted"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group form-group-feedback form-group-feedback-right">
                                                <input type="password" class="form-control" name="repass" placeholder="Repeat password" required>
                                                <div class="form-control-feedback">
                                                    <i class="icon-user-lock text-muted"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group form-group-feedback form-group-feedback-right">
                                                <input type="email" class="form-control" name="student_email" placeholder="Your email" required>
                                                <div class="form-control-feedback">
                                                    <i class="icon-mention text-muted"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group form-group-feedback form-group-feedback-right">
                                                <input type="text" class="form-control" name="student_phone" placeholder="GSM No(Only Digit and 555 555 55 55)" required>
                                                <div class="form-control-feedback">
                                                    <i class="mi-phone-android text-muted"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group form-group-feedback form-group-feedback-right">
                                                <input type="date" class="form-control" name="student_birthdate" placeholder="Your Birthdate" required>
                                                <div class="form-control-feedback">
                                                    <i class="icon-calendar text-muted"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group form-group-feedback form-group-feedback-right">
                                                <select class="custom-select" name="student_major" required>
                                                    <option value="" disabled selected>Select your Department</option>
                                                    <?php foreach ($departments as $departments) { ?>
                                                        <option value="<?= $departments->department_id ?>"><?= $departments->department_name ?></option>
                                                    <?php } ?>


                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group form-group-feedback form-group-feedback-right">
                                                <select class="custom-select" name="student_class" required>
                                                    <option value="" disabled selected>Select your Class</option>
                                                    <?php for ($i = 1; $i <= 4; $i++) { ?>
                                                        <option value="<?= $i ?>"><?= $i ?>. Class</option>
                                                    <?php } ?>



                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group form-group-feedback form-group-feedback-right">
                                                <select class="custom-select" name="student_gender" required>
                                                    <option value="" disabled selected>Select your Gender</option>
                                                    <?php
                                                    echo '<option value="0">Male</option>';
                                                    echo '<option value="1" >Female</option>';
                                                    ?>

                                                </select>
                                            </div>
                                        </div>

                                    </div>

                                    <button type="submit" class="btn bg-teal-400 btn-labeled btn-labeled-right"><b><i class="icon-plus3"></i></b> Create account</button>
                                    <a href="<?=base_url().'StudentController/StudentLogin'?>" style="float: right;"><button type="button" class="btn bg-warning-400 btn-labeled btn-labeled-right"><b><i class="icon-plus3"></i></b>Back To Login Page</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- /registration form -->

            </div>
            <!-- /content area -->


            <!-- Footer -->
            <div class="navbar navbar-expand-lg navbar-light">
                <div class="text-center d-lg-none w-100">
                    <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
                        <i class="icon-unfold mr-2"></i>
                        Footer
                    </button>
                </div>

            </div>
            <!-- /footer -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</body>

</html>