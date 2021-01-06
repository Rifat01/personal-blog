<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
  <div class="container">
    <a class="navbar-brand" href="/">Rifat's Personal Blog</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      Menu
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(route('index')); ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(route('about')); ?>">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(route('contact')); ?>">Contact</a>
        </li>

        <?php if(Auth::check()): ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(route('dashboard')); ?>">Dashboard</a>
        </li>
<!-- Logout Button -->
        <li class="nav-item">
          <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="post">
            <?php echo csrf_field(); ?>
          </form>
          <a class="nav-link" href="#" onclick="document.getElementById('logout-form').submit();">Logout</a>
        </li>

        <?php else: ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(route('login')); ?>">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(route('register')); ?>">Register</a>
        </li>

        <?php endif; ?>

      </ul>
    </div>
  </div>
</nav>
<?php /**PATH C:\xampp\htdocs\personal-blog\resources\views/includes/navigation.blade.php ENDPATH**/ ?>