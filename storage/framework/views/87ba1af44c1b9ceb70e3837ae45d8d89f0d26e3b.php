<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<style>
    .product_item,.product_item:hover,.product_item:active
    {
        text-decoration: none;
        color:black;
    }
    .product_item .checked
    {
      color:orange;
    }
</style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
</head>

<body>
    <div class="container">
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $array_products): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="d-flex flex-row mt-3">
            <?php $__currentLoopData = $array_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href= "<?php echo e(route('viewProductDetail',[
            'category'=>$category,
            'product'=>$product
        ])); ?>" class="product_item" title="<?php echo e($product->name); ?>">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="images/<?php echo e($product->image); ?>" alt="">
                <div class="card-body">
                <h5 class="card-title"><?php echo e($product->name); ?></h5>
                <p class="card-text"><?php echo e($product->price); ?>$</p>
                <div class="rating">
                    <span class="fas fa-star checked"></span>
                    <span class="fas fa-star checked"></span>
                    <span class="fas fa-star checked"></span>
                    <span class="fas fa-star"></span>
                    <span class="fas fa-star"></span>
                </div>
                <div class="">
                    <a href="#" class="btn btn-primary"><i class="fas fa-cart-plus"></i>Add Cart</a>
                </div>
            </div>
        </div>
        </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html><?php /**PATH /var/www/html/TIKI/resources/views/viewCategory.blade.php ENDPATH**/ ?>