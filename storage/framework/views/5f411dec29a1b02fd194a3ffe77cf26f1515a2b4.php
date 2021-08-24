
<?php $__env->startSection('content'); ?>
<?php $__currentLoopData = $pageData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<section class="headinner">
    <div class="container">
        <h3><?php echo e($data->title); ?></h3>
        <div class="breadcom">
            <a href="">Home</a><span> > </span> <a href=""> <?php echo e($data->title); ?> </a>
        </div>
    </div>
</section>

<section class="section-innerbar">
    <div class="container">
        <?php echo $data->text; ?>

    </div>
</section>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('include.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\harish\projects\germanshep\resources\views/site-news.blade.php ENDPATH**/ ?>