<?php $__env->startSection('description'); ?>
<h2>View shippers</h2>
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">User_name</th>
            <th scope="col">Email</th>
            <th scope="col">Telephone</th>
            <th scope="col">Address</th>
            <th scope="col">List Error</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $shippers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shipper): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
        <th scope="row"><?php echo e($shipper->id); ?></th>
        <td><?php echo e($shipper->name); ?></td>
        <td><?php echo e($shipper->email); ?></td>
        <td><?php echo e($shipper->telephone); ?></td>
        <td><?php echo e($shipper->position); ?></td>
        <td>Giao hàng trễ</td>
        <?php if(auth()->guard('shipper')->check()): ?> 
           <?php if(Auth::guard('shipper')->user()->name == $shipper->name  && Auth::guard('shipper')->user()->password == $shipper->password): ?>   
            <td>active</td>
            <?php else: ?> 
            <td>inactive</td>
            <?php endif; ?>
        <?php else: ?> 
        <td>inactive</td>
        <?php endif; ?>
            <td class="d-flex justify-content-around">
            <a href="<?php echo e(route('shippers.edit',[
                'shipper'=>$shipper,
            ])); ?>">
                <i class="fas fa-pencil-alt"></i>
                </a>
                
            <a href="<?php echo e(route('shippers.destroy',[
                'shipper'=>$shipper,
            ])); ?>">
                    <i class="fas fa-trash"></i>
            </td>
        </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>

<tr>
    <td>
    <a href="<?php echo e(route('shippers.create')); ?>">
            <button type="button" class="btn btn-primary"><i class="fas fa-plus"></i> Create</button>
        </a>
    </td>
    </tr>
</table>

<div class="row">
        <div class="col-12 d-flex justify-content-center">
            <?php echo e($shippers->links()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin',['url'=>'admin'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/TIKI/resources/views/admin/shippers/index.blade.php ENDPATH**/ ?>