<?php $__env->startSection('description'); ?>
            <h2>View Auths</h2>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">User_Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Telephone</th>
                        <th scope="col">Business_code</th>
                        <th scope="col">Violate</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $sellers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seller): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                    <th scope="row"><?php echo e($seller->id); ?></th>
                    <td><?php echo e($seller->name); ?></td>
                    <td><?php echo e($seller->email); ?></td>
                    <td><?php echo e($seller->telephone); ?></td>
                    <td><?php echo e($seller->business_code); ?></td>
                        <td><p>Bán hàng giả,hàng kém chất lượng</p></td>
                       
                        <td>
                            <a href="#">
                                <button type="button" class="btn btn-danger">Delete</button>
                            </a>
                        </td>
                    </tr>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
    
       
        <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/TIKI/resources/views/admin/sellers/index.blade.php ENDPATH**/ ?>