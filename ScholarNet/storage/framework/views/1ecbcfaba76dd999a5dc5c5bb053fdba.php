<?php if (isset($component)) { $__componentOriginal9881aee3032510140a884de503784c66 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9881aee3032510140a884de503784c66 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.master','data' => ['title' => 'soumestre']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('master'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'soumestre']); ?>
    <head>
        <link rel="stylesheet" href="<?php echo e(asset('css/module.css')); ?>">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <style>
            .card {
                max-width: 400px; /* Adjust the width as needed */
            }
            .pricing {
                display: flex;
                justify-content: center;
                align-items: center;
            }
        </style>
    </head>
    <body>
        <div style="padding-top: 150px;" class="container mb-5">
            <div class="pricing card-deck flex-column flex-md-row mb-3">
                <?php $__currentLoopData = $soumestreGrades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $soumestreId => $gradeInfo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card card-pricing popular shadow text-center px-3 mb-4">
                    <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm"><strong>Semester: <?php echo e($semester->nom); ?></strong></span>
                    <div class="card-body pt-0">
                        <ul class="list-unstyled mb-4">
                            <!-- Check if the average grade is defined -->
                            <?php if(isset($gradeInfo['averageGrade'])): ?>
                                <li>Note Moyenne : <span class="bold"><?php echo e($gradeInfo['averageGrade']); ?></span> </li>
                                <!-- Add logic for displaying validation and mention -->
                                <li>Validation : <span class="bold"><?php echo e($gradeInfo['averageGrade'] >= 12 ? 'Validé' : 'Non Validé'); ?></span></li>
                                <li>Mention : <span class="bold"><?php echo e($gradeInfo['averageGrade'] >= 16 ? 'Très Bien' : ($gradeInfo['averageGrade'] >= 14 ? 'Bien' : ($gradeInfo['averageGrade'] >= 12 ? 'Assez Bien' : 'Passable'))); ?></span></li>
                            <?php else: ?>
                                <li>Note Moyenne : <span class="bold">Aucune note disponible</span> </li>
                            <?php endif; ?>
                            <!-- You can add other details as needed -->
                        </ul>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php /**PATH C:\Users\Admin\Documents\PFE\ScholarNet\resources\views/student/student_notesoumesstre.blade.php ENDPATH**/ ?>