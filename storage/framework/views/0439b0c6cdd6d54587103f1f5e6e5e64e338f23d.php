<?php $__env->startSection('content'); ?>
<section class="headinner-no-background-img " style="background: url(images/81.jpg) 50% 0; background-size:cover;">
    <div class="container">
        <h3>German Shepherd Pedigree</h3>
        <div class="breadcom">
            <a href="">Home</a><span> > </span> <a href="">Pedigree</a>
        </div>
    </div>
</section>
<div class="blogsecton">
    <div class="container">
        <div class="blogitem">
            <a href="pdgdetail.php?pdgid=&pdgcat=">
                <div class="imageset">
                    <img src="<?php echo e(asset('images/img/default.jpg')); ?>" style="height:155px;">
                </div>
                <p></p>
            </a>

            <ul class="pagination">
               
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


<?php echo $__env->make('include.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\harish\projects\germanshep\resources\views/pedigree.blade.php ENDPATH**/ ?>