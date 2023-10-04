

<?php $__env->startSection('content'); ?>


<div class="container">
    <div class="row pt-4">
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-3">
                <div class="card">
                    <img src="<?php echo e(asset('storage/' . $product->img)); ?>" class="card-img-top" style="height: 350px">
                    <div class="card-body">
                        <h5 class="card-title">Name: <?php echo e($product->name); ?></h5>
                        <p class="card-text">Description: <?php echo e($product->description); ?></p>
                        <h4>Price: <?php echo e($product->price); ?> €</h4>
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
                                <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">Quantity:
                                <input type="number" value="1" name="quantity">
                                <button type="submit" class="btn btn-primary">Add to cart</button>
                            </form>
                            <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mobi_web_shop\resources\views/product.blade.php ENDPATH**/ ?>