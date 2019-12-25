<?php $__env->startSection('description'); ?>
            <h2>View Products</h2>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Mã sản phẩm</th>
                        <th scope="col">Hình ảnh</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Loại sản phẩm</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Tên tác giả</th>
                        <th scope="col">Hãng sản xuất</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row"><?php echo e($product->id); ?></th>
                        <td><img src="<?php echo e("/images/".$product->getImages()[0]); ?>" height="50" width="60" alt="null"> </td>
                    <td><?php echo e($product->name); ?></td>
                    <td><?php echo e($product->category->name); ?></td>
                    <td><?php echo e($product->price); ?></td>
                    <td><?php echo e($product->count); ?></td>
                    <td><?php echo e($product->publishing); ?></td>
                    <td><?php echo e($product->auther); ?></td>
                    <td><?php echo e($product->description); ?></td>
                        <td class="d-flex justify-content-around">
                            <a href="<?php echo e(route('products.edit',[
                              'product'=>$product,
                            ])); ?>">
                            <i class="fas fa-pencil-alt"></i>
                            </a>
                        <a href="<?php echo e(route('products.destroy',[
                          'product'=>$product,
                        ])); ?>">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            <tr>
                <td>
                <a href="<?php echo e(route('products.create')); ?>">
                        <button type="button" class="btn btn-primary"><i class="fas fa-plus"></i>  Create</button>
                    </a>
                </td>
                </tr>
            </table>

            <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <?php echo e($products->links()); ?>

                    </div>
                </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home.sellerIndex', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/TIKI/resources/views/admin/products/index.blade.php ENDPATH**/ ?>