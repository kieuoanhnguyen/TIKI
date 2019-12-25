<?php $__env->startSection('description'); ?>
            <form method="post" action="<?php echo e($url); ?>">
                <?php if($shipper->id): ?>
                <?php echo e(method_field('PUT')); ?>

                <?php echo e(csrf_field()); ?>

                <?php else: ?> 
                   <?php echo csrf_field(); ?>
                <?php endif; ?>   
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name"  name= "name" value="<?php echo e(old('name',$shipper->name)); ?>">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email"  name= "email" value="<?php echo e(old('email',$shipper->email)); ?>">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password"  name= "password">
                </div>
        
                <div class="form-group">
                    <label for="password">Address</label>
                    <input type="text" class="form-control" id="position"  name= "position" value="<?php echo e(old('position',$shipper->position)); ?>">
                </div>

                <div class="form-group">
                    <label for="telephone">Telephone</label>
                    <input type="text" class="form-control" id="telephone"  name= "telephone" value="<?php echo e(old('telephone',$shipper->telephone)); ?>">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin',['url'=>'admin'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/TIKI/resources/views/admin/shippers/edit.blade.php ENDPATH**/ ?>