<?php
$this->load->view('StudentView/StudentReqFiles/StudentHeader');
?>
<title>Student HomePage</title>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
      <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
      <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
      <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container"> 
          <div class="carousel-caption text-start">
            <img src="https://www.habersaglikcilar.com/wp-content/uploads/2019/08/dokuz-eylul-personel-sonuclari.jpg" class="img-fluid" width="80%" height="80%" style="margin-left:100px" alt="...">
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSIyqQT824j7UfmDIpHN0RWhoN6XpP01AL62A&usqp=CAU" class="img-fluid" width="80%" height="80%" style="margin-left:60px" alt="...">
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption">
            <img src="https://img-s2.onedio.com/id-5f1e9eb75135f2764dbc73a7/rev-0/w-1200/h-627/f-jpg/s-f222ae2feb7035a8793d797b123d28de2dc60941.jpg" class="img-fluid" width="80%" height="80%" style="margin-left:60px" alt="...">
          </div>
        </div>
      </div>
    </div>

    <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </a>
  </div>

 <?php $this->load->view('StudentView/StudentReqFiles/StudentFooter') ?>