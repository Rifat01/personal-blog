<?php $__env->startSection('title'); ?> admin comments <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="card">
            <div class="card-header bg-light">
                Admin Comments
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
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($comment->id); ?></td>
                                <td class="text-nowrap"> <a href="<?php echo e(route('singlePost', $comment->id)); ?>"> <?php echo e($comment->post->title); ?> </a> </td>
                                <td><?php echo e($comment->content); ?></td>
                                <td><?php echo e(\Carbon\Carbon::parse($comment->created_at)->diffForHumans()); ?></td>
                                <td>

                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteCommentModal-<?php echo e($comment->id); ?>">X</button> </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <!-- Modal -->
        <div class="modal fade" id="deleteCommentModal-<?php echo e($comment->id); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">You are about to delete this comment for the post <?php echo e($comment->post->title); ?></h4>
                    </div>
                    <div class="modal-body">
                        Are you sure?
                    </div>
                    <div class="modal-footer">

                        <button type="button" class="btn btn-default" data-dismiss="modal">No, keep this</button>

                        <form method="POST" id="deletePost-<?php echo e($comment->id); ?>" action="<?php echo e(route('adminDeletePost', $comment->id)); ?>"><?php echo csrf_field(); ?>
                            <button type="submit" class="btn btn-primary">Yes, Delete this!</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\personal-blog\resources\views/admin/comments.blade.php ENDPATH**/ ?>