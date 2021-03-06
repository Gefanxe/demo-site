<?php $this->extend('layout/default'); ?>

<?php $this->section('head'); ?>

<?php $this->endSection(); ?>

<?php $this->section('content'); ?>

    <section class="flexslider">
      <ul class="slides">
        
        <li style="background-image: url(/img/work_1.jpg)" class="overlay">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <div class="probootstrap-slider-text text-center">
                  <h1 class="probootstrap-heading">Poster</h1>
                  <p class="probootstrap-subheading">Brand Identity, Website</p>
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </section>

    <section class="probootstrap-section proboostrap-clients probootstrap-bg-white probootstrap-zindex-above-showcase">
      <div class="container">

        <div class="row mb50">
          <div class="col-md-4"><h1 class="mt0">This Is A Nice Title For Your Project</h1></div>
          <div class="col-md-7 col-md-push-1">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum est incidunt dolorem earum doloremque quasi mollitia magnam debitis eos eligendi ratione a illo ipsam aspernatur quas odio dicta! Neque ullam reiciendis numquam architecto eius reprehenderit aperiam dicta voluptates laborum a fugit sit non omnis perferendis magni suscipit dolorum cumque obcaecati autem. Explicabo odit veritatis quae porro praesentium veniam delectus itaque expedita cumque minus necessitatibus quia assumenda illum! Vitae doloribus nemo esse alias autem debitis facilis quae pariatur voluptatum eaque perspiciatis animi accusantium cupiditate at molestias optio assumenda hic fuga. Consequatur vero cupiditate ea dolorum sit cum odio ipsam aliquam sed!</p>
            <p>Explicabo odit veritatis quae porro praesentium veniam delectus itaque expedita cumque minus necessitatibus quia assumenda illum! Vitae doloribus nemo esse alias autem debitis facilis quae pariatur voluptatum eaque perspiciatis animi accusantium cupiditate at molestias optio assumenda hic fuga. Consequatur vero cupiditate ea dolorum sit cum odio ipsam aliquam sed!</p>
          </div>
        </div>
        <!-- END row -->
        <div class="row">
          <div class="col-md-12">
            <p><img src="/img/slider_1.jpg" class="img-responsive" alt="Free Bootstrap Template by uicookies.com"></p>
          </div>
        </div>
      </div>
    </section>

<?php echo $this->include('component/testimonial'); ?>

    <section class="probootstrap-section probootstrap-bg-white ">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center section-heading">
            <h2>More Project</h2>
          </div>
        </div>
      </div>
      <div class="owl-carousel owl-work">
        <div class="item">
          <a href="portfolio-single.html">
            <img src="/img/work_1.jpg" alt="Free Bootstrap Template by uicookies.com">
          </a>
        </div>
        <div class="item">
          <a href="portfolio-single.html">
            <img src="/img/work_2.jpg" alt="Free Bootstrap Template by uicookies.com">
          </a>
        </div>
        <div class="item">
          <a href="portfolio-single.html">
            <img src="/img/work_3.jpg" alt="Free Bootstrap Template by uicookies.com">
          </a>
        </div>
        <div class="item">
          <a href="portfolio-single.html">
            <img src="/img/work_4.jpg" alt="Free Bootstrap Template by uicookies.com">
          </a>
        </div>  
        <div class="item">
          <a href="portfolio-single.html">
            <img src="/img/work_5.jpg" alt="Free Bootstrap Template by uicookies.com">
          </a>
        </div>
        <div class="item">
          <a href="portfolio-single.html">
            <img src="/img/work_6.jpg" alt="Free Bootstrap Template by uicookies.com">
          </a>
        </div>
        <div class="item">
          <a href="portfolio-single.html">
            <img src="/img/work_7.jpg" alt="Free Bootstrap Template by uicookies.com">
          </a>
        </div>
      </div>
    </section>      
    
<?php echo $this->include('component/contactus'); ?>

<?php $this->endSection(); ?>