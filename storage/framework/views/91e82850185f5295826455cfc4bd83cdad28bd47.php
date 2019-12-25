   
<?php $__env->startSection('description'); ?>
<form method="post" action="<?php echo e($url); ?>" enctype = "multipart/form-data">
    <?php if($product->id): ?>
    <?php echo e(method_field('PUT')); ?>

    <?php echo e(csrf_field()); ?>

    <?php else: ?> 
    <?php echo csrf_field(); ?>
    <?php endif; ?>
                <div class="form-group">
                    <label for="name">Product_Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="<?php echo e(old('name',$product->name)); ?>" value="<?php echo e(old('name',$product->name)); ?>">
                </div>

                <div class="form-group">
                    <label for="category">Category_Name</label>
                <select class="form-control" id="category" name="category" >
                    <option value=" "> </option>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                       <?php if( !empty($product->category) && ($category->id === $product->category->id) ): ?>
                       <option value="<?php echo e($category->id); ?>" selected><?php echo e($category->name); ?></option>
                       <?php else: ?> 
                       <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                       <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                </div>

                <div class="form-group">
                    <label for="auther">Auther</label>
                <input type="text" class="form-control" id="auther" name="auther" value="<?php echo e(old('auther',$product->auther)); ?>">
                </div>

                <div class="form-group">
                    <label for="publishing">NXB</label>
                    <input type="text" class="form-control" id="publishing" name="publishing"  value="<?php echo e(old('publishing',$product->publishing)); ?>">
                </div>
                
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" id="price" name="price"  value=<?php echo e(old('price',$product->price)); ?>>
                </div>

                <div class="form-group">
                    <label for="count">Count</label>
                    <input type="number" name="count" id="count" class="form-control" value=<?php echo e(old('count',$product->count)); ?>></br>
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3"><?php echo e(old('description',$product->description)); ?></textarea>
                </div>
               
                <div class="form-group">
                    <label>Image</label>
                    <input name="filename[]" type="file" class="form-control" multiple="true" ></br>
                </div>
               
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea class="form-control" id="content" name="content" rows="3"><?php echo e(old('content',$product->content)); ?></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/TIKI/resources/views/admin/products/edit.blade.php ENDPATH**/ ?>