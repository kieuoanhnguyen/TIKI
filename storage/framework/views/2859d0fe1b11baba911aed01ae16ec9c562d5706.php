<?php $__env->startSection('description'); ?>
<h2>View Accounts</h2>
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">User_name</th>
            <th scope="col">Email</th>
            <th scope="col">Roles</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $accounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $account): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
        <th scope="row"><?php echo e($account->id); ?></th>
        <td><?php echo e($account->name); ?></td>
        <td><?php echo e($account->email); ?></td>
        <td>
            <?php $__currentLoopData = $account->roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p><?php echo e($role->name); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </td>
        <?php if(auth()->guard('admin')->check()): ?> 
           <?php if(Auth::guard('admin')->user()->name != $account->name||Auth::guard('admin')->user()->password != $account->password): ?>   
            <td>inactive</td>
            <?php else: ?> 
               <td>active</td>
            <?php endif; ?>
        <?php else: ?> 
        <td>inactive</td>
        <?php endif; ?>
            <td>
            <a href="<?php echo e(route('accounts.edit',[
                'account'=>$account,
            ])); ?>">
                    <button type="button" class="btn btn-primary">Edit</button>
                </a>
            <a href="<?php echo e(route('accounts.destroy',[
                'account'=>$account,
            ])); ?>">
                    <button type="button" class="btn btn-danger">Delete</button>
                </a>
            </td>
        </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>

<tr>
    <td>
    <a href="<?php echo e(route('accounts.create')); ?>">
            <button type="button" class="btn btn-primary">Create</button>
        </a>
    </td>
    </tr>
</table>

<div class="row">
        <div class="col-12 d-flex justify-content-center">
            <?php echo e($accounts->links()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin',['url'=>'admin'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/TIKI/resources/views/admin/accounts/index.blade.php ENDPATH**/ ?>