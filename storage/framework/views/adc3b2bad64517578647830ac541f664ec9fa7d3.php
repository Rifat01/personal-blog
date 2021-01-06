<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">User</li>

            <li class="nav-item">
                <a href="<?php echo e(route('userDashboard')); ?>" class="nav-link <?php echo e(Route::currentRouteName()=='userDashboard'?'active':''); ?>">
                    <i class="icon icon-speedometer"></i> Dashboard
                </a>
            </li>

            <li class="nav-item nav-dropdown">
                <a href="<?php echo e(route('userComments')); ?>" class="nav-link <?php echo e(Route::currentRouteName()=='userComments'?'active':''); ?>">
                    <i class="icon icon-book-open"></i> Comments
                </a>
            </li>

            <?php if(Auth::user()->author == true): ?>
            <li class="nav-title">Author</li>

            <li class="nav-item nav-dropdown">
                <a href="<?php echo e(route('authorDashboard')); ?>" class="nav-link <?php echo e(Route::currentRouteName()=='authorDashboard'?'active':''); ?>">
                    <i class="icon icon-speedometer"></i> Dashboard
                </a>
            </li>
            <li class="nav-item nav-dropdown">
                <a href="<?php echo e(route('authorPosts')); ?>" class="nav-link <?php echo e(Route::currentRouteName()=='authorPosts'?'active':''); ?>">
                    <i class="icon icon-paper-clip"></i> Posts
                </a>
            </li>
            <li class="nav-item nav-dropdown">
                <a href="<?php echo e(route('authorComments')); ?>" class="nav-link <?php echo e(Route::currentRouteName()=='authorComments'?'active':''); ?>">
                    <i class="icon icon-book-open"></i> Comments
                </a>
            </li>
            <?php endif; ?>

            <?php if(Auth::user()->admin == true): ?>
            <li class="nav-title">Admin</li>

            <li class="nav-item nav-dropdown">
                <a href="<?php echo e(route('adminDashboard')); ?>" class="nav-link <?php echo e(Route::currentRouteName()=='adminDashboard'?'active':''); ?>">
                    <i class="icon icon-speedometer"></i> Dashboard
                </a>
            </li>
            <li class="nav-item nav-dropdown">
                <a href="<?php echo e(route('adminPosts')); ?>" class="nav-link <?php echo e(Route::currentRouteName()=='adminPosts'?'active':''); ?>">
                    <i class="icon icon-paper-clip"></i> Posts
                </a>
            </li>
            <li class="nav-item nav-dropdown">
                <a href="<?php echo e(route('adminProducts')); ?>" class="nav-link <?php echo e(Route::currentRouteName()=='adminProducts'?'active':''); ?>">
                    <i class="icon icon-basket-loaded"></i> Products
                </a>
            </li>
            <li class="nav-item nav-dropdown">
                <a href="<?php echo e(route('adminComments')); ?>" class="nav-link <?php echo e(Route::currentRouteName()=='adminComments'?'active':''); ?>">
                    <i class="icon icon-book-open"></i> Comments
                </a>
            </li>
            <li class="nav-item nav-dropdown">
                <a href="<?php echo e(route('adminUsers')); ?>" class="nav-link <?php echo e(Route::currentRouteName()=='adminUsers'?'active':''); ?>">
                    <i class="icon icon-user"></i> Users
                </a>
            </li>
            <?php endif; ?>

        </ul>
    </nav>
</div>
<?php /**PATH C:\xampp\htdocs\personal-blog\resources\views/includes/admin/sidebarNavigation.blade.php ENDPATH**/ ?>