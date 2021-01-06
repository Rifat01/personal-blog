<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title','Laravel Blog Dashboard'); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('admin/assets/vendor/simple-line-icons/css/simple-line-icons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('admin/assets/vendor/font-awesome/css/fontawesome-all.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('admin/assets/css/styles.css')); ?>">
</head>
<body class="sidebar-fixed header-fixed">
<div class="page-wrapper">
    <?php echo $__env->make('includes.admin.headerNavigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="main-container">
      <?php echo $__env->make('includes.admin.sidebarNavigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <?php echo $__env->yieldContent('content'); ?>
    </div>
</div>
<script src="<?php echo e(asset('admin/assets/vendor/jquery/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/assets/vendor/popper.js/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/assets/vendor/bootstrap/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/assets/vendor/chart.js/chart.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/assets/js/carbon.js')); ?>"></script>
<script src="<?php echo e(asset('admin/assets/js/demo.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\personal-blog\resources\views/layouts/admin.blade.php ENDPATH**/ ?>