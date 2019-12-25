<?php $__env->startSection('description'); ?>
<h2>View Categories</h2>
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Category_Name</th>
            <th scope="col">Parent_Category_Name</th>
            <th scope="col">Page</th>
            <th scope="col">Description</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
        <th scope="row"><?php echo e($category->id); ?></th>
        <td><?php echo e($category->name); ?></td>
            <td><?php echo e($category->parent_category['name']); ?></td>
            <td>Otto</td>
            <td>Otto</td>
            <td>
            <a href="<?php echo e(route('categories.edit',[
                'category'=>$category,
            ])); ?>">
                    <button type="button" class="btn btn-primary">Edit</button>
                </a>
            <a href="<?php echo e(route('categories.destroy',[
                'category'=>$category,
            ])); ?>">
                    <button type="button" class="btn btn-danger">Delete</button>
                </a>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
    </tbody>

<tr>
    <td>
    <a href="<?php echo e(route('categories.create')); ?>">
            <button type="button" class="btn btn-primary">Create</button>
        </a>
    </td>
    </tr>
</table>

<div class="row">
        <div class="col-12 d-flex justify-content-center">
            <?php echo e($categories->links()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/TIKI/resources/views/admin/categories/index.blade.php ENDPATH**/ ?>