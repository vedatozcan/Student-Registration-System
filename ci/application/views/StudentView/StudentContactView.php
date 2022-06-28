<?php $this->load->view('StudentView/StudentReqFiles/StudentHeader') ?>
<style>

  .section-padding {
    padding: 60px 0;
  }
  .section-title {
    font-size: 30px;
    letter-spacing: 0;
    line-height: 32px;
    margin: 0 0 39px;
    padding: 0 0 11px;
    position: relative;
    text-transform: uppercase;
    color: #000;
  }
  .section-title::after {
    background: #fdb801 none repeat scroll 0 0;
    bottom: 0;
    content: "";
    height: 2px;
    left: 0;
    position: absolute;
    width: 54px;
}
  .section-dark {
    background-color: #f9f9f9;
    z-index: -2;
  }

</style>
<section class="Material-contact-section section-padding section-dark">
  <div class="container">
    <div class="row">
      <!-- Section Titile -->
      <div class="col-md-12 wow animated fadeInLeft" data-wow-delay=".2s">
        <h1 class="section-title">CONTACT US</h1>
      </div>
    </div>
    <div class="row">
      <!-- Section Titile -->
      <div class="col-md-6 mt-3 contact-widget-section2 wow animated fadeInLeft" data-wow-delay=".2s">
        <p>You can use the information below to contact us</p>

        <div class="find-widget">
          University: <a href="https://eng.deu.edu.tr/tr/">Dokuz Eylül University</a>
        </div>
        <div class="find-widget">
          Address: <a href="#">Adatepe Mah. Doğuş Cad. No: 207-I / 35390 Buca-İZMİR</a>
        </div>
        <div class="find-widget">
          Phone: <a href="#">+0 232 30 XXXXX</a>
        </div>

        <div class="find-widget">
          Website: <a href="https://eng.deu.edu.tr/tr/">https://eng.deu.edu.tr/tr/</a>
        </div>
      </div>
      <!-- contact form -->
      <div class="col-md-6 wow animated fadeInRight" data-wow-delay=".2s">
      </div>
    </div>
  </div>
</section>

<?php $this->load->view('StudentView/StudentReqFiles/StudentFooter') ?>