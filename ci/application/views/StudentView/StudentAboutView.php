<?php
$this->load->view('StudentView/StudentReqFiles/StudentHeader');
?>
<title>Student HomePage</title>
<style>
    .aboutus-section {
    padding: 50px 0;
}
.aboutus-title {
    font-size: 30px;
    letter-spacing: 0;
    line-height: 32px;
    margin: 0 0 39px;
    padding: 0 0 11px;
    position: relative;
    text-transform: uppercase;
    color: #000;
}
.aboutus-title::after {
    background: #fdb801 none repeat scroll 0 0;
    bottom: 0;
    content: "";
    height: 2px;
    left: 0;
    position: absolute;
    width: 54px;
}
.aboutus-text {
    color: #606060;
    font-size: 13px;
    line-height: 22px;
    margin: 0 0 35px;
}

a:hover, a:active {
    color: #ffb901;
    text-decoration: none;
    outline: 0;
}

</style>
<div class="aboutus-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="aboutus">
                        <h2 class="aboutus-title">About Student Registration System</h2>
                        <p class="aboutus-text">The main purpose of the application is to save the student's personal information, the course information that students is enrolled in and the instructor, grade and absentee information of these courses in the database and present them to the users when necessary.</p>
                        <p class="aboutus-text">Due to a global epidemic, it is safer for our health to register remotely via the internet rather than face to face. Thanks to the application, we provide these opportunities to users. This application is designed for convenience for students, and for teachers. In this way, users will be able to easily access the information they want.</p>
                    </div>
                </div>
            </div>
        </div>
</div>


 <?php $this->load->view('StudentView/StudentReqFiles/StudentFooter') ?>