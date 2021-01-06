<?php $__env->startSection('title'); ?> Posts <?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('<?php echo e(asset('assets/img/post-bg.jpg')); ?>')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1><?php echo e($post->title); ?></h1>
            <span class="meta">Posted by
              <a href="#"><?php echo e($post->user->name); ?></a>
              on <?php echo e(date_format($post->created_at,'F d, Y')); ?></span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <?php echo nl2br($post->content); ?>

        </div>
      </div>
      <div class="comments">
        <hr>
        <h2>Comments</h2>
        <hr>
        <?php $__currentLoopData = $post->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p><?php echo e($comment->content); ?><br>
        <p> <small>by <?php echo e($comment->user->name); ?> on <?php echo e(date_format($comment->created_at,'F d, Y')); ?></small> </p>
        <hr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php if(Auth::check()): ?>
              <form action="<?php echo e(route('newComment')); ?>" method="POST"><?php echo csrf_field(); ?>
                  <div class="form-group">
                      <textarea class="form-control" placeholder="Comment..." name="comment" id="" cols="30" rows="4"></textarea>
                      <input type="hidden" name="post" value="<?php echo e($post->id); ?>">
                  </div>
                  <div class="form-group">
                      <button class="btn btn-primary" type="submit"> Comment </button>
                  </div>
              </form>
        <?php endif; ?>
      </div>
    </div>
  </article>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\personal-blog\resources\views/singlePost.blade.php ENDPATH**/ ?>