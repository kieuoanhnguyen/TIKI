<?php $__env->startSection('content'); ?>

    <div class="container">
        <h2>View Order Detail</h2>
        <table class="table table-hover">
            <tr>
                <th scope="col">User Name:</th>
            <td scope="col"><?php echo e($order->fullname); ?></td>
            </tr>
            <tr>
                <th scope="col">Dia Chi</th>
            <td scope="col"><?php echo e($order->position); ?></td>
            </tr>
            <tr>
                <th scope="col">SDT</th>
            <td scope="col"><?php echo e($order->telephone); ?></td>
            </tr>
            <tr>
                <td scope="col">
                    
                    <table class="table table-hover">
                            <tr>
                                    <th scope="col">STT</th>
                                <th scope="col">Tên Sản Phẩm</th>
                                <th scope="col">Giá sản phẩm</th>
                                <th scope="col">Số Lượng</th>
                                <th scope="col">Thành Tiền</th>
                                </tr>
                            <?php  $i=1; ?>
                            <?php $__currentLoopData = $order->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                        <th scope="col"><?php echo e($i++); ?></th>
                        <th scope="col"><?php echo e($product->name); ?></th>
                        <th scope="col"><?php echo e($product->price); ?></th>
                        <th scope="col"><?php echo e($product->count); ?></th>
                        <th scope="col"><?php echo e($product->hasSell($product->count)); ?></th>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                </td>
            </tr>
            <tr>
                <th scope="col">Ma Code</th>
                <td scope="col"> 0123456789</td>
            </tr>
            <tr>
                <th scope="col">Tong Tien</th>
            <td scope="col"><?php echo e($order->total_money); ?></td>
            </tr>



        </table>
    </div>

 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/TIKI/resources/views/home/viewOrders.blade.php ENDPATH**/ ?>