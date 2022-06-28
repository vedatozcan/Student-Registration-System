<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">




  <!-- Bootstrap core CSS -->
  <link href="<?= base_url() ?>assets/StudentAssets/css/bootstrap.css" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">

  <script src="<?= base_url() ?>assets/StudentAssets/js/bootstrap.bundle.js"></script>

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>

  <?php

  if (!isset($_SESSION['signed']) || $_SESSION['signed'] != '1' && !isset($this->session->student_id)) { ?>
    <script>
      alert('Unauthorized Login! Please Login as Student');
      window.location.href = '<?= base_url('StudentController/StudentLogin') ?>'
    </script>
  <?php }

  ?>

  <!-- Custom styles for this template -->
  <link href="<?= base_url() ?>assets/StudentAssets/css/carousel.css" rel="stylesheet">
</head>
<style>
  body {

    padding-bottom: 0px;

  }

  .container {
    width: auto;
    max-width: 680px;
    padding: 0 15px;
  }
</style>

<body>

  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand">Student Registration System</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item active">
              <a class="nav-link" aria-current="page" href="<?= base_url() . 'StudentController/StudentHome/' ?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url() . 'StudentController/StudentAbout/' ?>">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url() . 'StudentController/StudentContact/' ?>">Contact</a>
            </li>
          </ul>

          <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
              <a class="nav-link" href="<?= base_url() . 'StudentController/StudentList/' ?>">Students</a>
            </li>
            <li class="nav-item text-nowrap">
              <a class="nav-link" href="<?= base_url() . 'StudentController/StudentCourses/' ?>">Courses</a>
            </li>
            <li class="nav-item text-nowrap">
              <a class="nav-link" href="<?= base_url() . 'StudentController/StudentLecturerList/' ?>">Lecturers</a>
            </li>
            <li class="nav-item text-nowrap">
              <a class="nav-link" href="<?= base_url() . 'StudentController/StudentMyProfile/' ?>">My Profile</a>
            </li>
            <li class="nav-item text-nowrap">
              <a class="nav-link">Welcome, <?= $this->session->student_firstname . ' ' . $this->session->student_lastname ?></a>
            </li>
            <li class="nav-item text-nowrap" style="background-color: gray;box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;">
              <a class="nav-link" href="<?= base_url() . 'StudentController/StudentHome/logout' ?>">Sign out</a>
            </li>
          </ul>

        </div>
      </div>
    </nav>
  </header>

  <main>