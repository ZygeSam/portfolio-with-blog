<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thoughts(ZBlog)</title>
    <link rel="stylesheet" href=css/bootstrap.min.css>
</head>
<body>
    <header>
		<marquee behavior="alternate" direction="right">Welcome to Zyge's blog</marquee>
    </header>
    <?php echo $__env->make('layout.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('body'); ?>
    
</body>
</html><?php /**PATH C:\Users\HP\laravel projects\th\laravel\resources\views/layout/app.blade.php ENDPATH**/ ?>