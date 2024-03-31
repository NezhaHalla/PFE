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
            .sup {
                position: absolute;
                bottom: 50px;
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

            .view-submissions-button {
                position: absolute;
                bottom: 50px;
                right: 300px; /* Adjusted right position */
                width: 170px;
                background-color: #4CAF50;
                color: white;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                font-size: 16px;
                margin-bottom: 10px; /* Adjusted margin */
            }

            /* Hover effect for the button */
            .sup:hover {
                background-color: #cc0000;
            }

            .view-submissions-button:hover {
                background-color: #45a049;
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
                            <button class="sup" onclick="return confirm('Do you want to delete this assignment ?')"  >Delete</button>
                        </form>
                        <?php endif; ?>
                        <form action="<?php echo e(route('assignment.submissions', $assignment->id)); ?>" method="GET">
                            <button class="view-submissions-button"   type="submit"> Submissions</button>
                        </form>

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
<?php /**PATH C:\Users\user\Documents\PFE\ScholarNet\resources\views/teacher/assignment_details.blade.php ENDPATH**/ ?>