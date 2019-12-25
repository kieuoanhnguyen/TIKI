<?php $__env->startSection('description'); ?>
        <h2>View WareHouses</h2>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <td ><?php echo e($warehouse->id); ?></td>
                </tr>
                <tr>
                    <th scope="col">Name</th>
                    <td><?php echo e($warehouse->name); ?></td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Danh Sach San Pham<th>
                </tr>
                <tr>      
                    <td>          
                        <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Ma San Pham</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Gia</th>
                                        <th scope="col">So Luong</th>
                                        <th scope="col">Thanh Tien</th>
                                        <th scope="col">Thoi Gian</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $warehouse->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                    <th scope="row"><?php echo e($product->id); ?></th>
                                    <td><?php echo e($product->name); ?></td>
                                    <td><?php echo e($product->price); ?></td>
                                    <td><?php echo e(count($product->orders)); ?></td>
                                    <td><?php echo e($product->hasSell); ?></td>
                                    <td><?php echo e($product->received_date); ?>

                                        <td>
                                            <a href="#">
                                                <button type="button" class="btn btn-danger">Delete</button>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                </tbody>
                            </table>
                        </td>
                </tr>
            </tbody>
        </table>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/TIKI/resources/views/admin/warehouses/detail.blade.php ENDPATH**/ ?>