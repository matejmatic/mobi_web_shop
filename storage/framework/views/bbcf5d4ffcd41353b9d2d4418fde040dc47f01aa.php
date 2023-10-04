

<?php $__env->startSection('content'); ?>

<div class="container pt-4">
   <h4>Welcome : <?php echo e(Auth::user()->name); ?> - <?php echo e(Auth::user()->email); ?></h4>
  <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <table class="table mt-6">
      <thead>
        <tr>
          <th scope="col">Order ID</th>
          <th scope="col">Product name</th>
          <th scope="col">Quantity</th>
          <th scope="col">Price</th>
          <th scope="col">Date</th>
        </tr>
      </thead>
      <tbody>
          <?php $__currentLoopData = $order->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <th scope="row"><?php echo e($order->id); ?></th>
              <td><?php echo e($product->name); ?></td>
              <td><?php echo e($product->pivot->quantity); ?></td>
              <td><?php echo e($product->price); ?> €</td>
              <td><?php echo e($product->pivot->created_at); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
    TOTAL: <?php echo e($order->total); ?> €
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web_shop_finish\resources\views/order.blade.php ENDPATH**/ ?>