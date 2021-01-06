<?php $__env->startSection('title'); ?> Admin posts <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="card">
            <div class="card-header bg-light">
                Admin Posts
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th>Comments</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($post->id); ?></td>
                                <td class="text-nowrap"> <a href="<?php echo e(route('singlePost', $post->id)); ?>"> <?php echo e($post->title); ?> </a> </td>
                                <td><?php echo e(\Carbon\Carbon::parse($post->created_at)->diffForHumans()); ?></td>
                                <td><?php echo e(\Carbon\Carbon::parse($post->updated_at)->diffForHumans()); ?></td>
                                <td><?php echo e($post->comments->count()); ?></td>
                                <td>
                                    <a href="<?php echo e(route('adminPostEdit', $post->id)); ?>" class="btn btn-warning">Edit</a>
                                    <form style="display: none;" method="POST" id="deletePost-<?php echo e($post->id); ?>" action="<?php echo e(route('adminDeletePost', $post->id)); ?>"><?php echo csrf_field(); ?></form>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deletePostModal-<?php echo e($post->id); ?>">Remove</button>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <!-- Modal -->
        <div class="modal fade" id="deletePostModal-<?php echo e($post->id); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">You are about to delete <?php echo e($post->title); ?></h4>
                    </div>
                    <div class="modal-body">
                        Are you sure?
                    </div>
                    <div class="modal-footer">

                        <button type="button" class="btn btn-default" data-dismiss="modal">No, keep this</button>

                        <form method="POST" id="deletePost-<?php echo e($post->id); ?>" action="<?php echo e(route('adminDeletePost', $post->id)); ?>"><?php echo csrf_field(); ?>
                        <button type="submit" class="btn btn-primary">Yes, Delete this!</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\personal-blog\resources\views/admin/posts.blade.php ENDPATH**/ ?>