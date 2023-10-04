

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

<!--
<div class="container">
    <div class="row">
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-6 mt-3">
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
</div> -->
    




    <script>
          /*$(document).ready(function(){
            console.log("OK")
            let search = document.getElementById('search').value;
            console.log("Search ", search)
          })*/

          //$(document).on('keyup', '#search', function() {
          /*$(document).on('keyup', function() {
            
            let search = document.getElementById('search').value;
            document.getElementById('products').innerHTML = ''
            
            fetch('/products/search')
                .then(res => res.json())
                .then(data => {
                console.log(data.products)
                data.products.forEach((product) => {
                    let productDiv = document.createElement('div')
                    let productImage = document.createElement('img')
                    let productBtn = document.createElement('button')
                    productImage.setAttribute('src', 'https://upload.wikimedia.org/wikipedia/commons/f/f3/Slika_nije_dostupna.svg')
                    productDiv.appendChild(productImage)

                    let productName = document.createElement('span')
                    productName.innerHTML = product.name
                    productDiv.appendChild(productName)
                    

                    productDiv.classList.add('product')


                    productBtn.classList.add('btn.btn-primary')
                    productBtn.innerHTML = 'Add to cart'
                    productDiv.appendChild(productBtn)

                    productBtn.addEventListener("click", function () {
                        window.location.href = "<?php echo URL::to('restaurants/20'); ?>";
                    })
                    
                    /*productDiv.addEventListener('click', () => {
                        document.getElementById('btn')
                        productBtn.innerHTML = 'Add to cart'
                    })*
                    document.getElementById('products').appendChild(productDiv)
                });*/


                //document.getElementById('p').innerHTML = data.ok
                //console.log(data)
                //let container = document.querySelector('.container');
                //document.getElementById('products').innerHTML = ''
                //let products = document.getElementById('products')
                //let products = document.querySelector('.products');

                /*data.products.forEach((product) => {
                    let myDiv = document.createElement("div");
                    let myDiv1 = document.createElement("div");
                        myDiv.innerHTML = "<div class=\"card\">"+ product.id +"</div>" 
                        myDiv1.innerHTML = "<div class=\"card\">"+ product.name +"</div>" 
                        //myDiv.innerHTML = ""
                        myDiv.style.height='100px'
                        myDiv.style.width='300px'
                   
                        products.appendChild(myDiv);
                        products.appendChild(myDiv1);
                });*/

                

                    /*for (let i = 1; i <= data.products.length; i++) {
                        let myDiv = document.createElement("div");
                        myDiv.innerHTML = "<div class=\"card\">"+ data +"</div>" 
                        myDiv.innerHTML = ""
                        myDiv.style.height='100px'
                        myDiv.style.width='300px'
                   
                        products.appendChild(myDiv);
                    }*/

            //})
            //var query = $(this).val()
            //console.log("Query ", search)
            //fetch_data (query)
        //})
    </script>

    <style>
        /*.product {
            width:200px;
            height:200px;
            background-color:red;
            margin: 30px 0px;
            border-bottom: 1px solid;
        }
        .product img {
            width:100%;
        }

        /*button {
            width: 60px;
            background-color:blue;
        }*/
    </style>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web_shop_finish\resources\views/product.blade.php ENDPATH**/ ?>