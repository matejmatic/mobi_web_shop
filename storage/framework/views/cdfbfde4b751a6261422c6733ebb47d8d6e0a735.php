

<?php $__env->startSection('content'); ?>

<div class="container pt-4" style="width:40%">
    <ul class="list-group">
        <?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?php echo e($cart->name); ?> - <?php echo e($cart->price); ?> €
                <span class="badge bg-primary rounded-pill"><?php echo e($cart->qty); ?></span>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    <hr>
    Total: <?php echo e(Gloudemans\Shoppingcart\Facades\Cart::subtotal()); ?> €

    <hr>
    <?php if(auth()->guard()->check()): ?>
    <?php if(Gloudemans\Shoppingcart\Facades\Cart::subtotal() > 1): ?>
        <a href="<?php echo e(route('checkout')); ?>" class="btn btn-primary">Checkout</a>
    <?php else: ?>
        <button type="button" class="btn btn-danger disabled">Your basket is empty</button>
    <?php endif; ?>
    <?php endif; ?>
    <?php if(auth()->guard()->guest()): ?>
    <a href="<?php echo e(route('login')); ?>" class="btn btn-primary">Sign in</a>
    <?php endif; ?>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mobi_web_shop\resources\views/cart.blade.php ENDPATH**/ ?>