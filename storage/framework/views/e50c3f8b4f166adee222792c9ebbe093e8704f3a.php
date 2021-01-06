<?php $__env->startSection('title'); ?> User Dashboard <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="content">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-6">
                <div class="card p-4">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <span class="h4 d-block font-weight-normal mb-2"><?php echo e(Auth::user()->comments->count()); ?></span>
                            <span class="font-weight-light">Comments</span>
                        </div>

                        <div class="h2 text-muted">
                            <i class="icon icon-book-open"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card p-4">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <span class="h4 d-block font-weight-normal mb-2"><?php echo e(Auth::user()->comments->unique('post_id')->count()); ?></span>
                            <span class="font-weight-light">Commented Posts</span>
                        </div>

                        <div class="h2 text-muted">
                            <i class="icon icon-paper-clip"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row ">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Comments By Dates
                    </div>

                    <div class="card-body p-0">
                        <?php echo $chart->container(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <?php echo $chart->script(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\personal-blog\resources\views/user/dashboard.blade.php ENDPATH**/ ?>