<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php $__env->startSection('navigation'); ?>

    <div class="m-3">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
            <a class="navbar-brand" href="#"><i class="fas fa-bars"></i> Home<span class="sr-only">(current)</span></a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Giới thiệu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Liên hệ</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-2">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
                <ul class="navbar-nav mr-0">
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->   
                
                       <?php if(auth()->guard($url)->guest()): ?>

                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route($url.'.login')); ?>"><?php echo e(__('Đăng nhập')); ?></a>
                            </li>
                            
                            <?php if(Route::has($url.'.register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route($url.'.register')); ?>"><?php echo e(__('Đăng kí')); ?></a>
                                </li>
                            <?php endif; ?>
                            
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <?php echo e(Auth::guard($url)->user()->name); ?>     <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route($url.'.logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route($url.'.logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                   
            
                    <li class="nav-item">
                        <a class="nav-link btn btn btn-outline-success" href="#">View Cart<i class="fas fa-shopping-cart"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="space20"></div>

    <?php echo $__env->yieldSection(); ?>
    
    <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/TIKI/resources/views/layouts/account_nav.blade.php ENDPATH**/ ?>