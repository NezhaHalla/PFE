<?php if (isset($component)) { $__componentOriginal9881aee3032510140a884de503784c66 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9881aee3032510140a884de503784c66 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.master','data' => ['title' => $assignment->titre]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('master'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($assignment->titre)]); ?>
    <head>
        <link href="<?php echo e(asset('css/details.css')); ?>" rel="stylesheet">
        <style>
            .doc {
                display: flex;
                border: 1px solid #ccc;
                position: relative;
                padding: 0px;
                margin: 0px;
                height: 80px;
                border-radius: 20%;
                bottom: -35px;
                z-index: 1000;
            }

            .div2 {
                font-size: 18px;
                position: absolute;
                top: -5px;
            }

            .aadd {
                color: blueviolet;
                text-decoration: underline;
                font-family: Georgia, 'Times New Roman', Times, serif;
            }

            .div3 {
                color: grey;
                position: absolute;
                right: 10px;
                top: 40%;
            }
        </style>
    </head>
    <body>
        <div class="center-container">
            <div class="card-list">
                <article class="card">
                    <div class="card-header">
                        <img src="<?php echo e(asset('storage/'.$assignment->teacher->image)); ?>" alt="">
                        <div><a href="<?php echo e(route("showProfile",$assignment->teacher->id)); ?>"><?php echo e($assignment->teacher->name); ?></a></div>
                        <div><?php echo e($assignment->createdAt); ?></div>
                    </div>
                    <div class="card-header">
                        <div>Deadline : <?php echo e($assignment->deadline); ?></div>
                    </div>
                    <figure class="card-image">
                        <div><?php echo e($assignment->titre); ?></div>
                        <div><?php echo e($assignment->description); ?></div>
                        <?php if(trim($assignment->fichier) !== '' || $assignment->fichier !== null ): ?>
                        <div class="doc">
                            <div class="div2"><a title="Download"  class="aadd" href="<?php echo e(route('showdocA',$assignment)); ?>"><?php echo e($assignment->titre.'.docx'); ?></a></div>
                            <div class="div3">size : <?php echo e($fileSizeInKB); ?> KB</div>
                        </div>
                        <?php endif; ?>
                        <?php if(auth()->user()->id === $assignment->teacher->id): ?>
                        <form action="<?php echo e(route('assignments.destroy',$assignment->id)); ?>" method="post">
                            <?php echo method_field('DELETE'); ?>
                            <?php echo csrf_field(); ?>
                            <button class="sup" onclick="return confirm('Do you want to delete this course ?')"  >Delete</button>
                        </form>
                        <?php endif; ?>

                    </figure>
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
<?php /**PATH C:\Users\Admin\Documents\PFE\ScholarNet\resources\views/teacher/assignment_details.blade.php ENDPATH**/ ?>