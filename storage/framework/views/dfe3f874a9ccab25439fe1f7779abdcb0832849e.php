<?php $__env->startSection('description'); ?>
    <form method="post" action="<?php echo e($url); ?>">
        <?php if($warehouse->id): ?>
        <?php echo e(method_field('PUT')); ?>

        <?php echo e(csrf_field()); ?>

        <?php else: ?>
           <?php echo csrf_field(); ?>
        <?php endif; ?>
            <div class="form-group">
                <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo e(old('name',$warehouse->name)); ?>">
            </div>
            <div class="form-group">
                <label for="position">Dia Chi</label>
            <input type="text" class="form-control" id="position" name="position" value="<?php echo e(old('position',$warehouse->position)); ?>">
            </div>
            <div class="form-group">
                <label for="telephone">SDT</label>
                <input class="form-control" name="telephone" id="telephone" type="text" value="<?php echo e(old('telephone',$warehouse->telephone)); ?>">
            </div>
            <div class="form-group">
                <label for="description">Mo Ta</label>
                <textarea class="form-control" name="description" id="description" rows="3"><?php echo e(old('description',$warehouse->description)); ?></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/TIKI/resources/views/admin/warehouses/edit.blade.php ENDPATH**/ ?>