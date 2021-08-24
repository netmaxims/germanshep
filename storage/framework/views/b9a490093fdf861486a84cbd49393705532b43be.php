
<?php $__env->startSection('content'); ?>
<section class="headinner" style="background: url(<?php echo e(asset('images/80.jpg')); ?>) 50% 0;">
    <div class="container">
        <h3>Blog</h3>
        <div class="breadcom">
            <a href="">Home</a><span> > </span> <a href="">Blog</a>
        </div>
    </div>
</section>
<div class="blogsecton">
    <div class="container">

        <div class="blogitem">



                    <a href="blogcat.php?blogcat_id=">
                        <div class="imageset">
                                <img src="<?php echo e(asset('images/8.png')); ?>" style="height:300px;width:300px;">
                        </div>
                        <p></p>
                    </a>
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

<section>
    <div class="newesletter">

    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('include.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\harish\projects\germanshep\resources\views/blog.blade.php ENDPATH**/ ?>