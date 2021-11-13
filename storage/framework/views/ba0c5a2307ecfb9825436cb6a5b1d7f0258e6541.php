                    <div class="alert alert-success">
                        <?php echo e(session()->get('message')); ?>

                   </div>
                    <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                        </div>
                    <?php endif; ?>

                    <div class="form-group"><label>Title</label><input class="form-control" type="text" name='title' value="<?php echo e(old ('title')); ?> "></div>
                     <div class="form-group"><label>Content</label><textarea class="form-control" name="body"><?php echo e(old ('body')); ?></textarea></div>
                    <input type="hidden" name="_token" value="<?php echo e(Session::token()); ?>"><?php /**PATH C:\Users\HP\laravel projects\zblog\resources\views/posts/form.blade.php ENDPATH**/ ?>