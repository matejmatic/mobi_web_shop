
<!--<ul class="nav justify-content-end py-2" style="background-color:#E9CAC3">-->
<ul class="nav justify-content-end py-2" style="background-color:rgb(255, 161, 149)">
 
  
  <li class="nav-item">
        <!--<form action="<?php echo e(route('search')); ?>" method="GET">-->
     
          <!--<input type="text" class="form-control" placeholder="Search product ..." id="search" name="query">
          
          <button type="submit">Search</button>
          
        </form> -->

      <form class="input-group" action="<?php echo e(route('search')); ?>" method="GET">
        <input type="search" name="query" class="form-control" placeholder="Search" aria-label="Search"
          aria-describedby="search-addon" />
        <button type="submit" class="btn btn-outline-primary">Search</button>
      </form>
      
  </li>

  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="<?php echo e(route('welcome')); ?>">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="<?php echo e(route('products')); ?>">Products</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?php echo e(route('cart.show')); ?>">Cart (<?php echo e(Gloudemans\Shoppingcart\Facades\Cart::content()->count()); ?>)</a>
  </li>
  <?php if(auth()->guard()->check()): ?>
  <li class="nav-item">
    <a class="nav-link" href="<?php echo e(route('order')); ?>">Order</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?php echo e(route('logout')); ?>"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
            <?php echo e(__('Logout')); ?>

        </a>
    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
        <?php echo csrf_field(); ?>
    </form>
  </li>
  <?php endif; ?>
  <?php if(auth()->guard()->guest()): ?>
  <li class="nav-item">
    <a class="nav-link" href="<?php echo e(route('login')); ?>">Sign in</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?php echo e(route('register')); ?>">Sign up</a>
  </li>
  <?php endif; ?>
</ul><?php /**PATH C:\xampp\htdocs\webshop_10.09\resources\views/layouts/navbar.blade.php ENDPATH**/ ?>