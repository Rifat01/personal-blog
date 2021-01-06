<?php $__env->startSection('title'); ?> About <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('<?php echo e(asset('assets/img/about.jpg')); ?>')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1>About Us</h1>
            <span class="subheading">This is what we do.</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="container">
      <div class="container">
          <h1 class="fcolor5" align="center"><br>Our Developers<br><img src="<?php echo e(asset('/assets/img/line.gif')); ?>"></h1>
      </div>

      <div class="row">

          <div class="col-md-3">
              <div class="card mb-4 shadow-sm">
                  <div class="card-header"><h3 class="fcolor font123">Crew Member</h3></div>
                  <div class="card-body">
                      <div class="flip-box">
                          <div class="flip-box-inner">
                              <div class="flip-box-front">
                                  <img src="<?php echo e(asset('/assets/img/service.jpg')); ?>" id="contact123" height="250px" width="100%" class="mx-auto d-block img-responsive ">
                              </div>
                              <div class="flip-box-back font123 fcolor1">
                                  <h2>Md. Muhabullah</h2>
                                  <h5>ID: 1611090042</h5>
                                  <p>B.Sc. in CSE<br>North South University</p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <div class="col-md-3">
              <div class="card mb-4 shadow-sm">
                  <div class="card-header"><h3 class="fcolor font123">Crew Member</h3></div>
                  <div class="card-body">
                      <div class="flip-box">
                          <div class="flip-box-inner">
                              <div class="flip-box-front">
                                  <img src="<?php echo e(asset('/assets/img/service.jpg')); ?>" id="contact123" height="250px" width="100%" class="mx-auto d-block">
                              </div>
                              <div class="flip-box-back font123 fcolor1">
                                  <h2>Mohammad Hossain</h2>
                                  <h5>ID: 1621047042</h5><p>B.Sc. in CSE<br>North South University</p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>





  <!-- Main Content
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">

      </div>
    </div>
  </div>-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\personal-blog\resources\views/about.blade.php ENDPATH**/ ?>