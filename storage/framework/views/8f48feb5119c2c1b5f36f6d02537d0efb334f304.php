<?php $__env->startSection('description'); ?>
        <h2>View Employees</h2>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Kho</th>
                    <th scope="col">Dia Chi</th>
                    <th scope="col">SDT</th>
                    <th scope="col">Danh Gia</th>
                    <th scope="col">Vi Pham</th>
                    <th scope="col">Hanh Dong</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                <th scope="row"><?php echo e($employee->id); ?></th>
                <td><?php echo e($employee->name); ?></td>
                <td><?php echo e($employee->warehouse->name); ?></td>
                <td><?php echo e($employee->position); ?></td>
                <td><?php echo e($employee->telephone); ?></td>
                <td>Danh Gia</td>
                <td>Vi Pham</td>
        
                    <td>
                            <td>
                                    <a href="<?php echo e(route('employees.edit',[
                                      'employee'=>$employee,
                                    ])); ?>">
                                        <button type="button" class="btn btn-primary">Edit</button>
                                    </a>
                                <a href="<?php echo e(route('employees.destroy',[
                                  'employee'=>$employee,
                                ])); ?>">
                                        <button type="button" class="btn btn-danger">Delete</button>
                                    </a>
                                </td>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </tbody>
            <tr>
                    <td>
                    <a href="<?php echo e(route('employees.create')); ?>">
                            <button type="button" class="btn btn-primary">Create</button>
                        </a>
                    </td>
                    </tr>
        </table>


        <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <?php echo e($employees->links()); ?>

                </div>
            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/TIKI/resources/views/admin/employees/index.blade.php ENDPATH**/ ?>