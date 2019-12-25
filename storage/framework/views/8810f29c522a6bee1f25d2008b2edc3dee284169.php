<!-- Page Content -->



<?php $__env->startSection('title','TIKI'); ?>
<?php $__env->startSection('navigation'); ?>
##parent-placeholder-ad8317924b75d19f07472d73181bd0a61bca481b##
     
    <?php $__env->stopSection(); ?>
    <div class="space20"></div>
    <div class="">
        <?php $__env->startSection('content'); ?>
        <div class="card m-3">
            <div class="card-header" style="background-color:#337AB7; color:white;">
                <h2 style="margin-top:0px; margin-bottom:0px;">Product</h2>
            </div>
    
            <div class="card-body">

                <!-- item -->
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
               
            <!-- end item -->
    
            <div class="d-flex justify-content-center mt-3">
                <button class="btn btn-outline-primary">Xem Thêm ...</button>
            </div>
        </div>
    </div>
    </div>
    </div>
    <?php $__env->stopSection(); ?>
    <!-- /.row -->
    </div>

    <!-- end Page Content -->
<?php echo $__env->make('layouts.menu',compact('categories'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/TIKI/resources/views/home/index.blade.php ENDPATH**/ ?>