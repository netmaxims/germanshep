<?php $__env->startSection('content'); ?>
<section class="headinner" style="background: url(<?php echo e(asset('images_1/80.jpg')); ?>);background-size:cover;">
    <div class="container">
        <h3>Login</h3>
        <div class="breadcom">
            <a href="">Home</a><span> > </span> <a href="">Login</a>
        </div>
    </div>
</section>

<div class="text-center text-danger">
    <?php echo e(session('msg')); ?>

</div>
<style>
    .form-container{
        background:#fff;
        padding: 30px;
        border-radius: 10px;
        box-shadow:0px 0px 10px 0px #000;
    }
</style>
<div class="row">
    <div class="container mt-5 mb-5 col-md-6 col-md-offset-4 ">
        <h2 class="text-center">Account Login</h2>
        <form action="<?php echo e(route('login.auth')); ?>"  method="POST" class="form-container">
            <?php echo csrf_field(); ?>
            <div class="form-group">
              <label for="exampleInputEmail1">Username</label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="username" aria-describedby="emailHelp" required='' title="Please enter username">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" name="password" id="exampleInputPassword1" required='' title="Please enter username">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</div>


<?php echo $__env->make('include.newsletter-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('include.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp64\www\germanshep\resources\views/login.blade.php ENDPATH**/ ?>