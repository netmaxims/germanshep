<?php $__env->startSection('content'); ?>
<section class="headinner" style="background: url(<?php echo e(asset('images/86.jpg')); ?>) 50% 0;">
    <div class="container">
        <h3>Image Gallery</h3>
        <div class="breadcom">
            <a href="">Home</a><span> > </span> <a href="">Gallery</a>
        </div>
    </div>
</section>
<div class="blogsecton">
    <div class="container">
        <div class="blogitem">
            <?php $__currentLoopData = $gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
            <a href="galdetail.php?galdet=<?php echo e($row->gallery_id); ?>">
                <div class="imageset">
                <?php if(empty($row->gallery_picture)): ?>
                    <img style="" class="height165" src="<?php echo e(asset('images/8.png')); ?>">
                <?php else: ?>
                    <img class="height165" src="<?php echo e(asset('addons/albums/images').'/'.$row->gallery_picture); ?>"
                         style="width:100%;">
                <?php endif; ?>
                    
                </div>
                <p><?php echo e($row->gallery_name); ?></p>
            </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <ul class="pagination">
                <?php echo e($gallery->links()); ?>

            </ul>
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

<?php echo $__env->make('include.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\harish\projects\germanshep\resources\views/gallery.blade.php ENDPATH**/ ?>