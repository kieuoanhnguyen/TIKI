<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View WareHouse</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2>View WareHouses</h2>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <td ><?php echo e($warehouse->id); ?></td>
                </tr>
                <tr>
                    <th scope="col">Name</th>
                    <td><?php echo e($warehouse->name); ?></td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Danh Sach San Pham<th>
                </tr>
                <tr>      
                    <td>          
                        <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Ma San Pham</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Gia</th>
                                        <th scope="col">So Luong</th>
                                        <th scope="col">Thanh Tien</th>
                                        <th scope="col">Thoi Gian</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $warehouse->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                    <th scope="row"><?php echo e($product->id); ?></th>
                                    <td><?php echo e($product->name); ?></td>
                                    <td><?php echo e($product->price); ?></td>
                                    <td><?php echo e(count($product->orders)); ?></td>
                                    <td><?php echo e($product->hasSell); ?></td>
                                    <td><?php echo e($product->received_date); ?>

                                        <td>
                                            <a href="#">
                                                <button type="button" class="btn btn-danger">Delete</button>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                </tbody>
                            </table>
                        </td>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html><?php /**PATH /var/www/html/TIKI/resources/views/Admin/WareHouse/detail.blade.php ENDPATH**/ ?>