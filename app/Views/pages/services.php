<?php $this->extend('layout/default'); ?>

<?php $this->section('head'); ?>

<?php $this->endSection(); ?>

<?php $this->section('content'); ?>

    <section class="flexslider">
      <ul class="slides">
        
        <li style="background-image: url(/img/slider_1.jpg)" class="overlay">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <div class="probootstrap-slider-text text-center">
                  <h1 class="probootstrap-heading">Services</h1>
                  <p class="probootstrap-subheading">Our specialty, we love to work with you</p>
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </section>


    

    <section class="probootstrap-section proboostrap-clients probootstrap-bg-white">
      <div class="container">

        <div class="row probootstrap-gutter60">
          <div class="col-md-4 probootstrap-animate" data-animate-effect="fadeIn">
            <div class="service hover_service text-center">
              <div class="icon"><i class="icon-mobile3"></i></div>
              <div class="text">
                <h3>Responsive Design</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
              </div>  
            </div>
          </div>
          <div class="col-md-4 probootstrap-animate" data-animate-effect="fadeIn">
            <div class="service hover_service text-center">
              <div class="icon"><i class="icon-presentation"></i></div>
              <div class="text">
                <h3>Business Solutions</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 probootstrap-animate" data-animate-effect="fadeIn">
            <div class="service hover_service text-center">
              <div class="icon"><i class="icon-circle-compass"></i></div>
              <div class="text">
                <h3>Brand Identity</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
              </div>
            </div>
          </div>

          <div class="col-md-4 probootstrap-animate" data-animate-effect="fadeIn">
            <div class="service hover_service text-center">
              <div class="icon"><i class="icon-lightbulb"></i></div>
              <div class="text">
                <h3>Creative Ideas</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
              </div>  
            </div>
          </div>
          <div class="col-md-4 probootstrap-animate" data-animate-effect="fadeIn">
            <div class="service hover_service text-center">
              <div class="icon"><i class="icon-magnifying-glass2"></i></div>
              <div class="text">
                <h3>Search Engine Friendly</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 probootstrap-animate" data-animate-effect="fadeIn">
            <div class="service hover_service text-center">
              <div class="icon"><i class="icon-browser2"></i></div>
              <div class="text">
                <h3>Easy Customization</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
              </div>
            </div>
          </div>
        </div>
        <!-- END row -->
      </div>
    </section>

<?php echo $this->include('component/testimonial'); ?>
    
<?php echo $this->include('component/contactus'); ?>

<?php $this->endSection(); ?>