<?php $__env->startSection('content'); ?>
<section class="headinner" style="background: url(<?php echo e(asset('images_1/80.jpg')); ?>) 50% 0;">
    <div class="container">
        <h3>Blog</h3>
        <div class="breadcom">
            <a href="">Home</a><span> > </span> <a href="">Blog</a>
        </div>
    </div>
</section>
<div class="blogsecton">
    <div class="container-fluid">

        <div class="blogitem">

<?php $__currentLoopData = $todoCat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <a href="blogcat.php?blogcat_id=">
                <div class="imageset">
                        <img src="images_1/8.png" style="height:300px;width:300px;">
                </div>
                <p><?php echo e($cat->category_name); ?></p>
            </a>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php echo e($todoCat->links('pagination::bootstrap-4')); ?>

</div>

        <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
            <div class="slides"></div>
            <h3 class="title"></h3>
            <a class="prev">‹</a>
            <a class="next">›</a>
            <a class="close">×</a>
            <a class="play-pause"></a>
            <ol class="indicator"></ol>
        </div>
    </div>
</div>

<?php echo $__env->make('include.newsletter-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('include.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp64\www\germanshep\resources\views/blog.blade.php ENDPATH**/ ?>