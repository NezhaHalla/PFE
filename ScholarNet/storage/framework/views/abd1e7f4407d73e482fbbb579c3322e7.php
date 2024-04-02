<?php if (isset($component)) { $__componentOriginal9881aee3032510140a884de503784c66 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9881aee3032510140a884de503784c66 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.master','data' => ['title' => $course->titre]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('master'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($course->titre)]); ?>
    <head>
        <link href="<?php echo e(asset('css/details.css')); ?>" rel="stylesheet">
        <style>
            .doc {
        display: flex;
        border: 1px solid #ccc;
        position: relative;
        padding: 0px;
        margin:0px;
        height:80px;
        border-radius: 20%;
        bottom: -35px;
        z-index: 1000;
    }

    .div2 {

        font-size: 18px;
        position: absolute;
        top:-5px;
    }

    .aadd{
        color: blueviolet;
        text-decoration: underline;
        font-family: Georgia, 'Times New Roman', Times, serif;
    }

    .div3 {
        color: grey;
        position: absolute;
        right:10px;
        top: 40%;
    }
    .sup {
                position: absolute;
                bottom: 0px;
                right: 120px;
                width: 170px;
                background-color: #ff4444;
                color: #fff;
                border: none;
                padding: 8px 16px;
                border-radius: 4px;
                cursor: pointer;
                margin-bottom: 10px; /* Adjusted margin */
            }

        </style>
    </head>
    <body>
        <div class="center-container">
        <div class="card-list">
            <article class="card">
                <div class="card-header">
                    <img src="<?php echo e(asset('storage/'.$course->teacher->image)); ?>" alt="">
                    <div><a href="<?php echo e(route("showProfile",$course->teacher->id)); ?>"><?php echo e($course->teacher->name); ?></a></div>
                    <div><?php echo e($course->createdAt); ?></div>
                </div>
                <div class="card-header">
                    <div><?php echo e($course->module->nom); ?></div>
                </div>
                <figure class="card-image">
                    <div><?php echo e($course->titre); ?></div>
                    <div><?php echo e($course->description); ?></div>
                    <div class="doc">
                        <div class="div2"><a title="Download"  class="aadd" href="<?php echo e(route('showdoc',$course)); ?>"><?php echo e($course->titre.'.docx'); ?></a></div>
                        <div class="div3">size : <?php echo e($fileSizeInKB); ?> KB</div>
                    </div>
                
                    <?php if(auth()->user()->id === $course->teacher->id): ?>
                    <form action="<?php echo e(route('course.destroy',$course->id)); ?>" method="post">
                        <?php echo method_field('DELETE'); ?>
                        <?php echo csrf_field(); ?>
                        <button class="sup" onclick="return confirm('Do you want to delete this course ?')"  >Delete</button>
                    </form>
                    <?php endif; ?>
                    
            </article>
        </div>
        </div>
    </body>

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
<?php /**PATH C:\Users\Admin\Documents\PFE\ScholarNet\resources\views/common/afficherDetailsCoure.blade.php ENDPATH**/ ?>