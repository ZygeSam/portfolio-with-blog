<?php ?>

<?php $__env->startSection('content'); ?>
 <main class="page blog-post-list">
        <section class="clean-block clean-blog-list dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Blog Post List</h2>
                    <p>Ooh, you're here, Please read what I talk about and kindly drop a feedback if you feel the need to. I would like to improve on my writing, you know I'm not a pro.</p>
                    <a class="btn btn-primary my-3" href="<?php echo e(route ('posts.create')); ?>">Click to Create your very own content</a>
                </div>
                <div class="block-content">
                
                <?php if(count($posts)>0): ?>
                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="clean-blog-post">
                                            <div class="row">
                                                <div class="col-lg-5"><img class="rounded img-fluid" src="assets/img/tech/image4.jpg"></div>
                                                    <div class="col-lg-7">
                                                        
                                                        <h3><?php echo e($post->title); ?></h3>
                                                        <div class="info"><span class="text-muted"><?php echo e($post->created_at); ?>&nbsp;<a href="#"><?php echo e($post->user->name); ?></a></span></div>
                                                        <p> <?php echo e(\Illuminate\Support\Str::substr($post->body, 0, 20)); ?>...</p>
                                                        <a href="/posts/<?php echo e($post->id); ?>"><button class="btn btn-outline-primary btn-sm" type="button">Read More</button></a>
                                                        <div class="interaction pt-3">
                                                            <a href="#">Like</a>
                                                        </div>
                                                    </div>   
                                                </div>
                                            </div>                    
                                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   <?php echo e($posts->links()); ?>

                    <?php else: ?>
                        <div class="jumbotron">
                            <p class="lead"> No Posts found </p>
                        </div>
                <?php endif; ?>                    
        </section>
    </main>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\laravel projects\zblog\resources\views/posts/index.blade.php ENDPATH**/ ?>