<!DOCTYPE html>
<html lang="en">
<head>
    <link href="<?php echo e(asset('css/post.css')); ?>" rel="stylesheet">
</head>
<body>
    <h1 class="head">Latest Publications</h1>

    <?php $__currentLoopData = $publication; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <article class="blog-card">
                    <div class="blog-card__info">
                        <h4 style="text-align: center"><?php echo e($pub->titre); ?></h4>
                        <p><?php echo e($pub->description); ?></p>
                        <p>Date: <?php echo e($pub->created_at->format('d-m-Y')); ?></p>
                        <div class="image-container">
                            <img src="<?php echo e(asset('storage/'.$pub->imagepub)); ?>" alt="<?php echo e($pub->titre); ?>">
                        </div>
                    </div>
                </article>
            </div>
            <?php if(auth()->guard()->check()): ?>
            <?php if(auth()->user()->role==='Admin'): ?>
            <form action="<?php echo e(route('publication.destroy',$pub->id)); ?>" method="post">
                <?php echo method_field('DELETE'); ?>
                <?php echo csrf_field(); ?>
                <button style="background-color: #ff4444;color: #fff;border: none;padding: 8px 16px;border-radius: 4px;cursor: pointer;" onclick="return confirm('Do you want to delete this post ?')">Delete</button>
            </form>
            <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
</html>
<?php /**PATH C:\Users\user\Documents\PFE\ScholarNet\resources\views/components/post.blade.php ENDPATH**/ ?>