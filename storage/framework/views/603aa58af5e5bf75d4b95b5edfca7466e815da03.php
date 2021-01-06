<?php $__env->startSection('title'); ?> Admin products <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="card">
            <div class="card-header bg-light">
                Admin Products

                <a href="<?php echo e(route('adminNewProduct')); ?>" class="btn btn-success"> New Product</a>

            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Thumbnail</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($product->id); ?></td>
                                <td><img src="<?php echo e($product->thumbnail); ?>"></td>
                                <td class="text-nowrap"> <a href="<?php echo e(route('adminEditProduct', $product->id)); ?>"> <?php echo e($product->title); ?> </a> </td>
                                <td><?php echo e($product->description); ?></td>
                                <td><?php echo e($product->price); ?> BDT</td>

                                <td>
                                    <a href="<?php echo e(route('adminEditProduct', $product->id)); ?>" class="btn btn-warning">Edit</a>

                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\personal-blog\resources\views/admin/products.blade.php ENDPATH**/ ?>