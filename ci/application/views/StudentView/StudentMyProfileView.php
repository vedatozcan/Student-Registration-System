<?php
$this->load->view('StudentView/StudentReqFiles/StudentHeader');
?>

<style>
    .form-control:focus {
        box-shadow: none;
        border-color: #BA68C8
    }

    .profile-button {
        background: #BA68C8;
        box-shadow: none;
        border: none
    }

    .profile-button:hover {
        background: #682773
    }

    .profile-button:focus {
        background: #682773;
        box-shadow: none
    }

    .profile-button:active {
        background: #682773;
        box-shadow: none
    }

    .back:hover {
        color: #682773;
        cursor: pointer
    }
</style>
<div class="container rounded bg-white mt-5">
    <div class="row">
        <div class="col-md-4 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-5" src="https://i.pinimg.com/originals/51/f6/fb/51f6fb256629fc755b8870c801092942.png" width="90">
                <span class="font-weight-bold"><?=$userInfo->student_firstname?> <?=$userInfo->student_lastname?></span>
                <span class="text-black-50"><?=$userInfo->student_email?></span>
            </div>
        </div>
        <div class="col-md-8">
            <form action="<?=$action?>" method="POST">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
                        <h6><a href="<?=base_url()?>StudentController/StudentHome/">Back to home</a></h6>
                    </div>
                    <h6 class="text-right">Edit Profile</h6>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6">
                        Firstname
                        <input type="text" class="form-control" value="<?=$userInfo->student_firstname?>" disabled>
                    </div>
                    <div class="col-md-6">
                    Lastname
                        <input type="text" class="form-control" value="<?=$userInfo->student_lastname?>" disabled>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        UserName
                        <input type="text" class="form-control" placeholder="Email" value="<?=$userInfo->student_username?>" disabled>
                    </div>
                    <div class="col-md-6">
                        BirthDate
                        <input type="date" class="form-control" value="<?=$userInfo->student_birthdate?>"  disabled>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        Class
                        <input type="email" class="form-control" placeholder="address" value="<?=$userInfo->student_class?>" disabled>
                    </div>
                    <div class="col-md-6">
                        Department
                        <input type="text" class="form-control" value="<?=$department->department_name?>"  disabled>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        E-Mail
                        <input type="email" class="form-control" name="student_email" value="<?=$userInfo->student_email?>">
                    </div>
                    <div class="col-md-6">
                        GSM No
                        <input type="text" class="form-control" name="student_telephone" value="<?=$userInfo->student_phone?>" placeholder="Country">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        Password
                        <input type="password" class="form-control" name="student_password" placeholder="Password">
                    </div>
                    <div class="col-md-6">
                        Repassword
                        <input type="password" class="form-control" name="student_repassword" placeholder="Repassword">
                    </div>
                </div>
                <div class="mt-5 text-right"><button class="btn btn-primary profile-button" type="submit">Save Profile</button></div>
            </div>
            </form>
            
        </div>
    </div>
</div>
<?php $this->load->view('StudentView/StudentReqFiles/StudentFooter') ?>