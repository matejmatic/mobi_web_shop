

 <!-- Navbar  -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-primary p-md-3">
      <div class="container">
        <a class="navbar-brand" href="<?php echo e(route('welcome')); ?>">Web Shop</a>
        
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mx-auto"></div>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-white" href="<?php echo e(route('welcome')); ?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="<?php echo e(route('products')); ?>">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="<?php echo e(route('cart.show')); ?>">Cart (<?php echo e(Gloudemans\Shoppingcart\Facades\Cart::content()->count()); ?>)</a>
            </li>
            <?php if(auth()->guard()->check()): ?>
            <li class="nav-item">
              <a class="nav-link text-white" href="<?php echo e(route('order')); ?>">Order</a>
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
              <a class="nav-link text-white" href="<?php echo e(route('login')); ?>">Sign in</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="<?php echo e(route('register')); ?>">Sign up</a>
            </li>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </nav>

<?php /**PATH C:\xampp\htdocs\web_shop_finish\resources\views/layouts/navbar.blade.php ENDPATH**/ ?>