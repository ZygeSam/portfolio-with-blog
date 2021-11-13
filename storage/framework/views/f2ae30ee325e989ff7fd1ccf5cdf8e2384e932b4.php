<?php $__env->startSection('body'); ?>
   <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <h1><?php echo e($page->title); ?></h1> 
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
<h1>Posts Index</h1>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\laravel projects\th\laravel\resources\views/pages/index.blade.php ENDPATH**/ ?>