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
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>Otto</td>
            <td>Otto</td>
            <td>
                <a href="/admin/categories/category/edit">
                    <button type="button" class="btn btn-primary">Edit</button>
                </a>
                <a href="#">
                    <button type="button" class="btn btn-danger">Delete</button>
                </a>
            </td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>Otto</td>
            <td>Otto</td>
            <td>
                <a href="/admin/categories/category/edit">
                    <button type="button" class="btn btn-primary">Edit</button>
                </a>
                <a href="../">
                    <button type="button" class="btn btn-danger">Delete</button>
                </a>
            </td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>Otto</td>
            <td>Otto</td>
            <td>
                <a href="/admin/categories/category/edit">
                    <button type="button" class="btn btn-primary">Edit</button>
                </a>
                <a href="#">
                    <button type="button" class="btn btn-danger">Delete</button>
                </a>
            </td>
        </tr>
    </tbody>
</table>
<tr>
    <td>
        <a href="/admin/categories/create">
            <button type="button" class="btn btn-primary">Create</button>
        </a>
    </td>
    </tr>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/TIKI/resources/views/home/admin/categories.blade.php ENDPATH**/ ?>