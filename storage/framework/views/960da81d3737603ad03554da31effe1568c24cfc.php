<?php $__env->startSection('description'); ?>
        <h2>View WareHouses</h2>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">SDT</th>
                    <th scope="col">Dia Chi</th>
                    <th scope="col">Tong San Pham</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $warehouses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $warehouse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                <th scope="row"><?php echo e($warehouse->id); ?></th>
                <td><?php echo e($warehouse->name); ?></td>
                <td><?php echo e($warehouse->telephone); ?></td>
                <td><?php echo e($warehouse->position); ?></td>
                <td><?php echo e(count($warehouse->products)); ?></td>
        
                    <td>
                    <a href="<?php echo e(route('warehouses.show',[
                        'warehouse' => $warehouse
                    ])); ?>">
                            <button type="button" class="btn"><i class="fas fa-eye"></i></button>
                        </a>
                        <a href="<?php echo e(route('warehouses.edit',[
                        'warehouse' => $warehouse
                    ])); ?>">
                            <button type="button" class="btn"><i class="fas fa-pencil-alt"></i></button>
                        </a>
                        <a href="<?php echo e(route('warehouses.destroy',[
                            'warehouse' => $warehouse
                        ])); ?>">
                            <button type="button" class="btn"><i class="fas fa-trash-alt"></i></button>
                        </a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </tbody>
            <tr>
                    <td>
                        <a href="<?php echo e(route('categories.create')); ?>">
                            <button type="button" class="btn btn-primary"><i class="fas fa-plus"></i>Create</button>
                        </a>
                    </td>
                    </tr>
        </table>

        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <?php echo e($warehouses->links()); ?>

            </div>
        </div>
   <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/TIKI/resources/views/admin/warehouses/index.blade.php ENDPATH**/ ?>