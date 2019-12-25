<?php $__env->startSection('content'); ?>
    <div class= "container">
        <h3> Có <?php echo e(count($png_products) ." sản phẩm được tìm thấy theo : '" . $keyword."'"); ?>

    </div>   
    <div class="container">
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $array_products): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="d-flex flex-row mt-3">
           
            <?php $__currentLoopData = $array_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href= "<?php echo e(route('viewProductDetail',[
            'category'=>$product->category->slug,
            'product'=>$product->slug
        ])); ?>" class="product_item" title="<?php echo e($product->name); ?>">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="images/<?php echo e($product->getImages()[0]); ?>" alt="" width="320px" height="300px">
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
                <a href="<?php echo e(route('viewProductDetail',[
                    'category'=>$product->category->slug,
                    'product'=>$product->slug
                ])); ?>" class="btn btn-primary"><i class="fas fa-cart-plus"></i>Add Cart</a>
                </div>
            </div>
        </div>
        </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <?php echo e($png_products->links()); ?>

            </div>
        </div>
   <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/TIKI/resources/views/home/search.blade.php ENDPATH**/ ?>