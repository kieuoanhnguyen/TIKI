 

<?php $__env->startSection('description'); ?>

<form method="post" action="<?php echo e($url); ?>"" enctype="multipart/form-data"">

<?php if($employee->id): ?>
<?php echo e(method_field('PUT')); ?>

<?php echo e(csrf_field()); ?>

<?php else: ?> 
  <?php echo csrf_field(); ?> 
<?php endif; ?>


    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="<?php echo e(old('name',$employee->name)); ?>">
    </div>
    <div class="form-group">
        <label for="telephone">Telephone</label>
        <input type="text" class="form-control" id="telephone" name="telephone" value="<?php echo e(old('telephone',$employee->telephone)); ?>">
    </div>
    <div class="form-group">
        <label for="position">Address</label>
        <input type="text" class="form-control" id="position" name="position" value="<?php echo e(old('position',$employee->position)); ?>">
    </div>
    <div class="form-group">
        <label for="warehouse_id">Ware_houses</label>
        <select class="form-control" id="warehouse_id" name="warehouse_id">
            <option value="">  </option>
            <?php $__currentLoopData = $warehouses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php if($item->id === $employee->warehouse->id): ?>
              <option value="<?php echo e($item->id); ?>" selected><?php echo e($item->name); ?></option>
              <?php else: ?> 
              <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
              <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
    <div class="form-group">
        <label for="description">Description</label>
    <textarea class="form-control" id="description" name="description" rows="3"><?php echo e(old('description',$employee->description)); ?></textarea>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/TIKI/resources/views/admin/employees/edit.blade.php ENDPATH**/ ?>