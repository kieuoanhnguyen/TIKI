<div class="d-flex flex-row">
    <div class="col-3">
        <ul class="list-group" id="menu">
            <li href="#" class="list-group-item menu1 active">
                Menu
            </li>

            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(empty($category->parent_category)): ?>
            <div class="menu">
                <li href="#" class="list-group-item menu1">
                <a href="<?php echo e(route('viewListProduct',[
                'category'=>$category->slug
                ])); ?>"><?php echo e($category->name); ?></a>
                </li>
                <ul>
                <?php $__currentLoopData = $category->child_category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                    <li class="list-group-item">
                    <a href="<?php echo e(route('viewListProduct',[
                        'category'=>$item->slug
                    ])); ?>"><?php echo e($item->name); ?></a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>   
            </div>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
             
            
        </ul>
    </div>
    <!-- slider -->
    <div class="col-9">
        <script>
            if (document.images) {
                var image1 = new Image();
                image1.src = "/images/images.jpg";
                var image2 = new Image();
                image2.src = "/images/images6.jpeg";
            }
        </script>
        <a href="#" onMouseOver="document.myImage.src=image2.src;" onMouseOut="document.myImage.src=image1.src;">
            <img name="myImage" src="/images/images.jpg" width="700px" height="357px" />
        </a>
    </div>
</div><?php /**PATH /var/www/html/TIKI/resources/views/layouts/menu.blade.php ENDPATH**/ ?>