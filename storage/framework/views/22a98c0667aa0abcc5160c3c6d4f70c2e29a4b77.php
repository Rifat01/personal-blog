<?php $__env->startSection('title'); ?> Editing <?php echo e($user->name); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-light">
                            Editing <?php echo e($user->name); ?>

                        </div>

                        <?php if(Session::has('success')): ?>
                            <div class="alert alert-success"><?php echo e(Session::get('success')); ?></div>
                        <?php endif; ?>

                        <?php if($errors->any()): ?>
                            <div class="alert alert-danger">
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>

                        <form action="<?php echo e(route('adminEditUserPost', $user->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="normal-input" class="form-control-label">Name</label>
                                            <input name="name" id="normal-input" class="form-control" value="<?php echo e($user->name); ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="normal-input" class="form-control-label">Email</label>
                                            <input name="email" type="email" id="normal-input" class="form-control" value="<?php echo e($user->email); ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="normal-input" class="form-control-label">Permission</label>
                                            <input type="checkbox" class="form-control" name="author" value=1 <?php echo e($user->author == true ? 'checked' : ''); ?> > Author
                                            <br>
                                            <input type="checkbox" class="form-control" name="admin" value=1 <?php echo e($user->admin == true ? 'checked' : ''); ?>> Admin
                                        </div>
                                    </div>

                                </div>


                                <button class="btn btn-success" type="submit">Update User</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\personal-blog\resources\views/admin/editUser.blade.php ENDPATH**/ ?>