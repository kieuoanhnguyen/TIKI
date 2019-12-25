<?php $__env->startSection('description'); ?>
            <form method="post" action="<?php echo e($url); ?>">
                <?php if($account->id): ?>
                <?php echo e(method_field('PUT')); ?>

                <?php echo e(csrf_field()); ?>

                <?php else: ?> 
                   <?php echo csrf_field(); ?>
                <?php endif; ?>   
                <div class="form-group">
                    <label for="name">Name</label>
                <input type="text" class="form-control" id="name"  name= "name" value="<?php echo e(old('name',$account->name)); ?>">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email"  name= "email" value="<?php echo e(old('email',$account->email)); ?>">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password"  name= "password">
                </div>
                <div class="form-group">
                    <label for="roles">Roles</label>
                    <select class="form-control" id="roles" name="roles" >
                        <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($account->roles[0]->id === $role->id): ?>
                    <option value=<?php echo e($role->id); ?> selected><?php echo e($role->name); ?></option>
                        <?php else: ?> 
                        <option value=<?php echo e($role->id); ?>><?php echo e($role->name); ?></option>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin',['url'=>'admin'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/TIKI/resources/views/admin/accounts/edit.blade.php ENDPATH**/ ?>