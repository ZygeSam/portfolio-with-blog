<?php $__env->startSection('content'); ?>
    <main class="page contact-us-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info"><?php echo e($title); ?></h2>
                    <p>Hi there , welcome Zygers <span style="text-decoration: underline;">Try visiting here always, Create  your post today and see it  fly around the world</p>
                </div>
                
                <form action="<?php echo e(route('posts.store')); ?>" method="post">
                   <?php echo $__env->make('posts.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                   <div class="form-group"><button class="btn btn-primary btn-block">Create</button></div>
                </form>
            </div>
        </section>
    </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\laravel projects\zblog\resources\views/posts/create.blade.php ENDPATH**/ ?>