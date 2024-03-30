<?php if (isset($component)) { $__componentOriginal9881aee3032510140a884de503784c66 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9881aee3032510140a884de503784c66 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.master','data' => ['title' => $publication->titre]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('master'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($publication->titre)]); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="<?php echo e(asset('css/post.css')); ?>" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <article class="blog-card">
                    <div class="blog-card__info">
                        <h4 style="text-align: center ; border-bottom:1px solid rgb(43, 43, 43) ;padding-top:50px;"><?php echo e($publication->titre); ?></h4>
                        <p style="padding-top: 40px"><?php echo e($publication->description); ?></p>
                        <p>Date: <?php echo e($publication->created_at->format('d-m-Y')); ?></p>
                        <div class="image-container">
                            <img src="<?php echo e(asset('storage/'.$publication->imagepub)); ?>" alt="<?php echo e($publication->titre); ?>">
                        </div>
                    </div>
                </article>
            </div>
            <?php if(auth()->guard()->check()): ?>
            <?php if(auth()->user()->role==='Admin'): ?>
            <form action="<?php echo e(route('publication.destroy',$publication->id)); ?>" method="post">
                <?php echo method_field('DELETE'); ?>
                <?php echo csrf_field(); ?>
                <button style="background-color: #ff4444;color: #fff;border: none;padding: 8px 16px;border-radius: 4px;cursor: pointer;" onclick="return confirm('Do you want to delete this post ?')">Delete</button>
            </form>
            <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9881aee3032510140a884de503784c66)): ?>
<?php $attributes = $__attributesOriginal9881aee3032510140a884de503784c66; ?>
<?php unset($__attributesOriginal9881aee3032510140a884de503784c66); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9881aee3032510140a884de503784c66)): ?>
<?php $component = $__componentOriginal9881aee3032510140a884de503784c66; ?>
<?php unset($__componentOriginal9881aee3032510140a884de503784c66); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Admin\Documents\PFE\ScholarNet\resources\views/homepage/post.blade.php ENDPATH**/ ?>