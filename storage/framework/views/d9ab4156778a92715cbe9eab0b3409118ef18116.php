 

<?php $__env->startSection('content'); ?>

<div class="shopping-cart">
    <!-- Title -->
    <div class="title">
        <h2> Shopping Bag</h2>
    </div>
    <div>
    <?php if(auth()->guard()->check()): ?>    
            <h5><?php echo e(Cart::session(Auth::user()->id)->getContent()->count()); ?> item(s) in your cart</h5>
        </div>
    <?php $__currentLoopData = Cart::session(Auth::user()->id)->getContent(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <!-- Product  -->
    <div class="item">
        <div class="buttons">
          <a href="<?php echo e(route('carts.destroy',[
              'cart' => $item->id
          ])); ?>" ><span class="delete-btn"><i class="fas fa-trash-alt"></i></span></a>
            <span class="like-btn"><i class="fas fa-heart"></i></span>
        </div>

        <div class="image">
        <img src="/images/<?php echo e($item->attributes['image']); ?>" alt="" />
        </div>

        <div class="description">
        <span><?php echo e($item->name); ?></span>
        </div>

        <div class="quantity">
            <button class="plus-btn" type="button" name="button">
                <i class="fas fa-plus"></i>
        </button>
    <input type="text" name="count" value="<?php echo e($item->quantity); ?>">
            <button class="minus-btn" type="button" name="button">
                <i class="fas fa-minus"></i>
        </button>
        </div>

    <div class="total-price">$<?php echo e($item->getPriceSum()); ?></div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<div class="d-flex justify-content-center mt-3">
<a href="<?php echo e(route('checkout')); ?>" class="btn btn-success">
        Check Out
</a>
</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/TIKI/resources/views/cart/index.blade.php ENDPATH**/ ?>