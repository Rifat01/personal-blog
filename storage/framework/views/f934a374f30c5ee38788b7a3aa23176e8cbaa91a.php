<?php $__env->startSection('title'); ?> Author comments <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="card">
            <div class="card-header bg-light">
                Author Comments
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Post</th>
                            <th>Content</th>
                            <th>Created at</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = Auth::user()->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($comment->id); ?></td>
                                <td class="text-nowrap"> <a href="<?php echo e(route('singlePost', $comment->id)); ?>"> <?php echo e($comment->post->title); ?> </a> </td>
                                <td><?php echo e($comment->content); ?></td>
                                <td><?php echo e(\Carbon\Carbon::parse($comment->created_at)->diffForHumans()); ?></td>

                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\personal-blog\resources\views/author/comments.blade.php ENDPATH**/ ?>