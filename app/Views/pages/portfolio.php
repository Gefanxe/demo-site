<?php $this->extend('layout/default'); ?>

<?php $this->section('head'); ?>

<?php $this->endSection(); ?>

<?php $this->section('content'); ?>

    <section class="flexslider">
      <ul class="slides">
        
        <li style="background-image: url(/img/slider_3.jpg)" class="overlay">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <div class="probootstrap-slider-text text-center">
                  <h1 class="probootstrap-heading">Portfolio</h1>
                  <p class="probootstrap-subheading">View our awesome work, we love to work with you</p>
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </section>

    <section class="probootstrap-section probootstrap-bg-white ">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center section-heading">
            <h2>Our Selected Projects</h2>
          </div>
        </div>
      </div>
      <div class="owl-carousel owl-work">
        <div class="item">
          <a href="portfolio-single.html">
            <img src="/img/work_1.jpg" alt="Free Bootstrap Template by uiCookies.com">
          </a>
        </div>
        <div class="item">
          <a href="portfolio-single.html">
            <img src="/img/work_2.jpg" alt="Free Bootstrap Template by uiCookies.com">
          </a>
        </div>
        <div class="item">
          <a href="portfolio-single.html">
            <img src="/img/work_3.jpg" alt="Free Bootstrap Template by uiCookies.com">
          </a>
        </div>
        <div class="item">
          <a href="portfolio-single.html">
            <img src="/img/work_4.jpg" alt="Free Bootstrap Template by uiCookies.com">
          </a>
        </div>  
        <div class="item">
          <a href="portfolio-single.html">
            <img src="/img/work_5.jpg" alt="Free Bootstrap Template by uiCookies.com">
          </a>
        </div>
        <div class="item">
          <a href="portfolio-single.html">
            <img src="/img/work_6.jpg" alt="Free Bootstrap Template by uiCookies.com">
          </a>
        </div>
        <div class="item">
          <a href="portfolio-single.html">
            <img src="/img/work_7.jpg" alt="Free Bootstrap Template by uiCookies.com">
          </a>
        </div>
      </div>
    </section>

<?php echo $this->include('component/testimonial'); ?>
    
<?php echo $this->include('component/contactus'); ?>

<?php $this->endSection(); ?>