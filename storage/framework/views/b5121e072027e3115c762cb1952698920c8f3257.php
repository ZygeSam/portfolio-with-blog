<?php $__env->startSection('content'); ?>
<main class="page blog-post">
        <section class="clean-block clean-post dark">
            <div class="container">
                <div class="block-content">
                    <div class="post-image" style="background-image:url(&quot;<?php echo e(asset('assets/img/scenery/image3.jpg')); ?>&quot;);"></div>
                    <div class="post-body">
                        <h3><?php echo e($post->title); ?></h3>
                        <div class="post-info"><span>By John Smith</span><span>Jan 27, 2018</span></div>
                        <p><?php echo e($post->body); ?></p>
                </div>
            </div>
        </section>
    </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\laravel projects\zblog\resources\views/posts/show.blade.php ENDPATH**/ ?>