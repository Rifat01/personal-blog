<?php $__env->startSection('title'); ?> Rifat's Blog <?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('<?php echo e(asset('assets/img/com.jpg')); ?>')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Personal Blog</h1>
            <span class="subheading">Powered By rifat</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">

        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="post-preview">
          <a href="<?php echo e(route('singlePost',$post->id)); ?>">
            <h2 class="post-title">
              <?php echo e($post->title); ?>

            </h2>
          </a>
          <p class="post-meta">Posted by
            <a href="#"><?php echo e($post->user->name); ?></a>
            on <?php echo e(date_format($post->created_at,'F d, Y')); ?>

            |
            <i class="fa fa-comment" aria-hidden="true"></i> <?php echo e($post->comments->count()); ?>


          </p>
        </div>
        <hr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php echo e($posts->links()); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\personal-blog\resources\views/welcome.blade.php ENDPATH**/ ?>