



<?php $__env->startSection('content'); ?>

<div class="content mt-4" style="min-height:100vh">
    <div class="row">
        <div class="col-md-3">
            
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <ol class="list-group ml-2 mb-2">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                        <div class="fw-bold"><?php echo e($category->name); ?></div>
                        </div>
                        <span>
                            <a href="<?php echo e(route('products.category.id', $category->id)); ?>" class="btn btn-primary">Show</a>
                        </span>
                    </li>
                </ol>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <div class="col-md-9">
        <div class="container">
            <div class="row">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="<?php echo e(asset('storage/'.$product->img)); ?>" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo e($product->name); ?></h5>
                                    <p class="card-text"><?php echo e($product->description); ?></p>
                                    <h4><?php echo e($product->price); ?> KM</h4>
                                        <?php if($cart->where('id', $product->id)->count()): ?>
                                            <strong>In cart</strong>
                                                <form action="<?php echo e(route('cart.remove')); ?>" method="POST">
                                                    <?php echo e(method_field('DELETE')); ?>

                                                    <?php echo csrf_field(); ?>
                                                <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
                                                <button type="submit" class="btn btn-danger">Remove item</button>
                                            </form>
                                        <?php else: ?>
                                        <form action="<?php echo e(route('cart.store')); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
                                            <input type="number" value="1" name="quantity">
                                            <button type="submit" class="btn btn-primary">Add to cart</button>
                                        </form>
                                        <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webshop_10.09\resources\views/show-products-by-category.blade.php ENDPATH**/ ?>