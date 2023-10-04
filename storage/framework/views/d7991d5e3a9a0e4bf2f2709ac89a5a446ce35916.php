

<?php $__env->startSection('content'); ?>

<div class="row pt-4" style="width: 90%; margin:auto">
    <div class="col-md-2 px-2">
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active disabled" aria-current="true">
                Categories
            </a>
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(route('products.category.id', $category->id)); ?>" class="list-group-item list-group-item-action"><?php echo e($category->name); ?></a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    <div class="col-md-8">
        <!--<img src="https://img.lovepik.com/photo/40005/9211.jpg_wh300.jpg" width="100%" height="500px"> -->
        <img src="<?php echo e(asset('storage/image_1.png')); ?>" width="100%" height="500px">
    </div>
    <div class="col-md-2">
        <div class="px-2">
            <h3><i>Welcome to our website: mobi.com</i> </h3>
            <hr>
            <h4><i>Address: London </i></h4>
            <hr>
            <h4><i>Contact: 063-456-789</i></h4>
            <hr>
        </div>
    </div>
</div>

<div class="row pt-4" style="width: 90%; margin:auto">
    <div class="col-md-4">
        <img src="<?php echo e(asset('storage/image_2.png')); ?>" width="100%" height="250px">
    </div>
    <div class="col-md-4">
        <img src="<?php echo e(asset('storage/image_3.png')); ?>" width="100%" height="250px">
    
    </div>
    <div class="col-md-4">
        <img src="<?php echo e(asset('storage/image_2.png')); ?>" width="100%"  height="250px">
    
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web_shop_finish\resources\views/welcome.blade.php ENDPATH**/ ?>