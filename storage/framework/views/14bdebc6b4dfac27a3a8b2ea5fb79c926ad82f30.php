<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categories</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2>View Categories</h2>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Category_Name</th>
                    <th scope="col">Parent_Category_Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                <th scope="row"><?php echo e($category->id); ?></th>
                <td><?php echo e($category->name); ?></td>

                <td>
                <?php if($category->parent_category !=null): ?>
                <?php echo e($category->parent_category->name); ?>

                <?php endif; ?>
                </td>
                <td><?php echo e($category->description); ?></td>
                    <td>
                    <a href="<?php echo e(route('categories.edit',[
                        'category'=>$category
                    ])); ?>">
                            <button type="button" class="btn btn-primary">Edit</button>
                        </a>
                    <a href="<?php echo e(route('categories.destroy',[
                        'category'=>$category
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
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html><?php /**PATH /var/www/html/TIKI/resources/views/Admin/Category/index.blade.php ENDPATH**/ ?>