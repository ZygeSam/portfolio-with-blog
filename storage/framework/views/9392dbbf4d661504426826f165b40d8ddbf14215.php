<?php $__env->startSection('content'); ?>
    <main class="page contact-us-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="block-heading">
                            <h2 class="text-info">Create Post</h2>
                            <p>Hi there , welcome Zygers <span style="text-decoration: underline;">Try visiting here always, Create  your post today and see it  fly around the world</p>
                        </div>
                    
                        <form action="" method="post">
                        <?php echo $__env->make('posts.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <div class="form-group"><button class="btn btn-primary btn-block">Create</button></div>
                        </form>
                    </div>
                    <div class="col">
                        <div class="block-heading">
                            <h2 class="text-info"><?php echo e($title); ?></h2>
                        </div>
                        <div class="block-content">
                        <?php echo e(session()->flash('message')); ?>

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
                                                            <a href="<?php echo e(route ('posts.edit', ['post'=>$post->id ])); ?>">Edit</a>
                                                            <a href="<?php echo e(route('posts.destroy', ['post'=> $post->id])); ?>">Delete</a>
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
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\laravel projects\zblog\resources\views/pages/dashboard.blade.php ENDPATH**/ ?>