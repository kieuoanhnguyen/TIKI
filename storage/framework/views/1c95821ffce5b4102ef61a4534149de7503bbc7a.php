<?php $__env->startSection('description'); ?>
            <form method="post" action="<?php echo e($url); ?>">
                <?php if($category->id): ?>
                <?php echo e(method_field('PUT')); ?>

                <?php echo e(csrf_field()); ?>

                <?php else: ?> 
                   <?php echo csrf_field(); ?>
                <?php endif; ?>   
                <div class="form-group">
                    <label for="name">Category_Name</label>
                <input type="text" class="form-control" id="name"  name= "name" value="<?php echo e(old('name',$category->name)); ?>">
                </div>
                <div class="form-group">
                    <label for="parent_category">Parent_Category_Name</label>
                    <select class="form-control" id="parent_category" name="parent_category" >
                      <option value=""></option>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <?php if(!empty($category->parent_category) && $category->parent_category->id === $item->id): ?>
                        <option value="<?php echo e($item->id); ?>" selected><?php echo e($item->name); ?></option>
                      <?php else: ?> 
                        <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                      <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3"><?php echo e(old('description',$category->description)); ?></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/TIKI/resources/views/admin/categories/edit.blade.php ENDPATH**/ ?>