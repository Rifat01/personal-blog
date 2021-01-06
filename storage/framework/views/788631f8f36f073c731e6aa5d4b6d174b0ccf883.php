<?php $__env->startSection('title'); ?> admin users <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="card">
            <div class="card-header bg-light">
                Admin Users
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Posts</th>
                            <th>Comments</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($user->id); ?></td>
                                <td class="text-nowrap"> <?php echo e($user->name); ?> </td>
                                <td><?php echo e($user->email); ?></td>
                                <td><?php echo e($user->posts->count()); ?></td>
                                <td><?php echo e($user->comments->count()); ?></td>
                                <td><?php echo e(\Carbon\Carbon::parse($user->created_at)->diffForHumans()); ?></td>
                                <td><?php echo e(\Carbon\Carbon::parse($user->updated_at)->diffForHumans()); ?></td>
                                <td>
                                    <a href="<?php echo e(route('adminEditUser', $user->id)); ?>" class="btn btn-warning"> <i class="icon icon-pencil">  </i> </a>
                                    <form style="display: none" id="deleteUser-<?php echo e($user->id); ?>" action="<?php echo e(route('adminDeleteUser',$user->id)); ?>" method="post"><?php echo csrf_field(); ?></form>
                                    <button type="button" class="btn btn-danger" onclick="document.getElementById('deleteUser-<?php echo e($user->id); ?>').submit()">X</button> </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\personal-blog\resources\views/admin/users.blade.php ENDPATH**/ ?>