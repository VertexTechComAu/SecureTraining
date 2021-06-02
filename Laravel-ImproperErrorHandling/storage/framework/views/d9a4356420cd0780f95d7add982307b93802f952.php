<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center pt-5">
                <h1 class="display-one mt-5"><?php echo e(config('app.name')); ?></h1>
                <p>This awesome blog has many articles, click the button below to see them</p>
                <br>
                <a href="./index.php/blog" class="btn btn-outline-primary">Show Blog</a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /www/public/name3/SecureTraining/Laravel-ImproperErrorHandling/resources/views/welcome.blade.php ENDPATH**/ ?>