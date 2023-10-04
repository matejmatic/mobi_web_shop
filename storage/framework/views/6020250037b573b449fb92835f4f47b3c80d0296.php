

<?php $__env->startSection('content'); ?>
    <img src="<?php echo e(asset('storage/closet_logo.jpg')); ?>" width="100%" height="350px">

    <div class="container">
    <div class="row">
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
        <div class="col-md-4">
            <div class="card mt-4" style="border: 2px solid">
                <div class="card-body">
                    <h3 class="card-title"><?php echo e($category->name); ?></h3>
                    <a href="<?php echo e(route('products.category.id', $category->id)); ?>" class="btn btn-primary">Show products</a>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webshop_10.09\resources\views/welcome.blade.php ENDPATH**/ ?>