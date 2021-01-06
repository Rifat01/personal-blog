<?php $__env->startSection('content'); ?>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('<?php echo e(asset('assets/img/home-bg.jpg')); ?>')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>Shop</h1>
                        <span class="subheading">Buy your Products</span>
                    </div>
                </div>
            </div>
        </div>
    </header>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\personal-blog\resources\views/shop/index.blade.php ENDPATH**/ ?>