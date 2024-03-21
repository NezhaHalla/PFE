<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.css">
    <link href="<?php echo e(asset('css/announcement.css')); ?>" rel="stylesheet">
</head>
<body>
<div class="slide-container swiper">
    <div class="slide-content">
        <div class="card-wrapper swiper-wrapper">
            <?php $__currentLoopData = $announcement; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $announce): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card swiper-slide">
                    <div class="image-content">
                        <div class="overlay"></div>
                        <div class="card-image">
                            <?php if(!empty($announce->imagepub)): ?>
                                <img src="<?php echo e(asset('storage/'.$announce->imagepub)); ?>" alt="" class="card-img">
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="card-content">
                        <h2 class="name" style="text-align:center"><?php echo e($announce->titre); ?></h2>
                        <p class="description"><?php echo e($announce->description); ?></p>
                        <?php if(auth()->guard()->check()): ?>
                        <?php if(auth()->user()->role==='Admin'): ?>
                        <form action="<?php echo e(route('publication.destroy',$announce->id)); ?>" method="post">
                            <?php echo method_field('DELETE'); ?>
                            <?php echo csrf_field(); ?>
                            <button class="sup" onclick="return confirm('Do you want to delete this announcement ?')" >Delete</button>
                        </form>
                        <?php endif; ?>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

    <div class="swiper-button-next swiper-navBtn"></div>
    <div class="swiper-button-prev swiper-navBtn"></div>
    <div class="swiper-pagination"></div>
</div>
<script src="//cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.js"></script>
<script src="<?php echo e(asset('js/announcement.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\Users\Admin\Documents\PFE\ScholarNet\resources\views/components/announcement.blade.php ENDPATH**/ ?>