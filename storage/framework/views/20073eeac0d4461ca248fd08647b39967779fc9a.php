

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <a href="<?php echo e(route('admin.products.create')); ?>" class="btn btn-primary float-right ml-3 mb-2">Add a new product</a>
        <div class="col-md-12">
            <div class="row">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?php echo e(asset('storage/' . $product->img)); ?>" class="card-img-top" style="height: 350px">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($product->name); ?></h5>
                            <p class="card-text"><?php echo e($product->description); ?></p>
                            <h5 class="card-title"><?php echo e($product->price); ?> €</h5>

                            <div class="row">
                                <div class="col-md-6">
                                    <a href="<?php echo e(route('admin.products.edit', $product->id)); ?>" class="w-100 btn btn-warning">Edit</a>
                                </div>
                                <div class="col-md-6">
                                    <form action="<?php echo e(route('admin.products.destroy', $product->id)); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo e(method_field('DELETE')); ?>

                                        <button type="submit" onclick="return confirm('Are you sure?');" class="w-100 btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>


        <!--<div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Products
                    <a href="<?php echo e(route('admin.products.create')); ?>" class="btn btn-primary float-right">Add a new product</a>
                </div>

                <div class="row mx-auto">
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col">
                            <div class="card-body">
                                <div class="card" style="width: 18rem; height: 500px">
                                    <img src="<?php echo e(asset('storage/'.$product->img)); ?>" class="card-img-top" height="200" height= "400px" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo e($product->name); ?></h5>
                                        <p class="card-text"><?php echo e($product->description); ?></p>
                                        <div class="row">
                                            <div class="col">
                                                <a href="<?php echo e(route('admin.products.edit', $product->id)); ?>" class="btn btn-warning">Edit</a>
                                            </div>
                                            <div class="col">
                                                <form action="<?php echo e(route('admin.products.destroy', $product->id)); ?>" method="POST">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo e(method_field('DELETE')); ?>

                                                    <button type="submit" onclick="return confirm('Are you sure?');" class="btn btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div> -->
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web_shop_finish\resources\views/admin/products/index.blade.php ENDPATH**/ ?>