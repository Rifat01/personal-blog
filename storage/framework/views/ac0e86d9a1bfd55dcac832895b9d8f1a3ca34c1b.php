<?php $__env->startSection('title'); ?> Admin Dashboard <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="card p-4">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <span class="h4 d-block font-weight-normal mb-2"><?php echo e(\App\Post::all()->count()); ?></span>
                                <span class="font-weight-light">Posts</span>
                            </div>

                            <div class="h2 text-muted">
                                <i class="icon icon-paper-clip"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card p-4">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <span class="h4 d-block font-weight-normal mb-2"><?php echo e(\App\Comment::all()->count()); ?></span>
                                <span class="font-weight-light">Comments</span>
                            </div>

                            <div class="h2 text-muted">
                                <i class="icon icon-book-open"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card p-4">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <span class="h4 d-block font-weight-normal mb-2"><?php echo e(\App\User::all()->count()); ?></span>
                                <span class="font-weight-light">Users</span>
                            </div>

                            <div class="h2 text-muted">
                                <i class="icon icon-book-open"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row ">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Post by day
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\personal-blog\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>