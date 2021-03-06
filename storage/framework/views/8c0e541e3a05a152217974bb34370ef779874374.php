<nav class="navbar page-header">
    <a href="#" class="btn btn-link sidebar-mobile-toggle d-md-none mr-auto">
        <i class="fa fa-bars"></i>
    </a>

    <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
        <h2 style="color: #1e9faf">Personal-Blog</h2>
    </a>

    <a href="#" class="btn btn-link sidebar-toggle d-md-down-none">
        <i class="fa fa-bars"></i>
    </a>

    <ul class="navbar-nav ml-auto">

        <?php if(Auth::user()->author == true): ?>
            <a href="<?php echo e(route('newPost')); ?>" class="btn btn-primary"> New Post </a> |
        <?php endif; ?>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                <img src="<?php echo e(asset('admin/assets/imgs/avatar-1.png')); ?>" class="avatar avatar-sm" alt="logo">
                <span class="small ml-1 d-md-down-none"><?php echo e(Auth::user()->name); ?></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header">Account</div>

                <a href="<?php echo e(route('userProfile')); ?>" class="dropdown-item">
                    <i class="fa fa-user"></i> Profile
                </a>

                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="post"><?php echo csrf_field(); ?></form>
                <a href="#" onclick="document.getElementById('logout-form').submit();" class="dropdown-item">
                    <i class="fa fa-lock"></i> Logout
                </a>
            </div>
        </li>
    </ul>
</nav>
<?php /**PATH C:\xampp\htdocs\personal-blog\resources\views/includes/admin/headerNavigation.blade.php ENDPATH**/ ?>