<?php $__env->startSection('content'); ?>
<div class="d-flex flex-row">
        <div class="col-3">
            <ul class="list-group" id="menu">
                <li href="#" class="list-group-item menu1 active">
                    Menu
                </li>
                <div class="menu">
                      <li href="#" class="list-group-item menu1">
                    <a href="#">Quản lí</a>
                </li>
                <ul>
                    <li class="list-group-item">
                    <a href="<?php echo e(route('products.index')); ?>">Sản phẩm</a>
                    </li>
                </ul>
                </div>

            </ul>
        </div>
        <!-- slider -->
        <div class="col-9">
            
        <div class="container">
            <?php echo $__env->yieldContent('description'); ?>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.account_nav',['url'=>'admin'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/TIKI/resources/views/home/sellerIndex.blade.php ENDPATH**/ ?>