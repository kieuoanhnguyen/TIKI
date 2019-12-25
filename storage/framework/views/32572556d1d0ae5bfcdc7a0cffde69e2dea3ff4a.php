<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>View Cart</h2>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Mã Sản Phẩm</th>
                <th scope="col">Tên Sản Phẩm</th>
                <th scope="col">The Loai</th>
                <th scope="col">Số Lượng</th>
                <th scope="col">Thành Tiền</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>Otto <i class="fas fa-plus-circle"></i></td>
                <td>Otto</td>
                <td>
                    <a href="#">
                        <button type="button" class="btn btn-danger">Delete</button>
                    </a>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>Otto<i class="fas fa-plus-circle"></i></td>
                <td>Otto</td>
                <td>
                    <a href="#">
                        <button type="button" class="btn btn-danger">Delete</button>
                    </a>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>Otto<i class="fas fa-plus-circle"></i></td>
                <td>Otto</td>
                <td>
                    <a href="#">
                        <button type="button" class="btn btn-danger">Delete</button>
                    </a>
                </td>

            </tr>
            <tr>
                <th scope="row"> Tổng Tiền:</th>
                <td>27654372892</td>
            </tr>
        </tbody>
        <tr>
            <td>
                <a href="/user/addCart">
                    <button type="button" class="btn btn-primary">Đặt Hàng</button>
                </a>
            </td>
        </tr>
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/TIKI/resources/views/home/viewCart.blade.php ENDPATH**/ ?>