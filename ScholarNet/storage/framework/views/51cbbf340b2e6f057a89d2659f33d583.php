<?php if (isset($component)) { $__componentOriginal9881aee3032510140a884de503784c66 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9881aee3032510140a884de503784c66 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.master','data' => ['title' => 'Teacher Classes']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('master'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Teacher Classes']); ?>
    <style>
        .container {
            margin-top: 50px;
        }

        .card {
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .card-header {
            background-color: #f7f7f7; /* Blue background for header */
            color: #000000; /* White text color */
            border-radius: 15px 15px 0 0;
            padding: 20px; /* Increased padding for header */
            text-align: center; /* Center align text */
        }

        .card-body {
            padding: 20px;
        }

        .dropdown-menu {
            background-color: #f8f9fa;
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 5px;
            width: 100%;
        }

        .dropdown-menu li {
            list-style: none;
            margin-bottom: 5px;
        }

        .btn-primary {
            background-color: #f5f9fd;
            color: #080808;
            border: none;
            width: 100%;
            text-align: left;
            border-radius: 0; /* Remove border radius */
        }

        .dropdown-toggle::after {
            display: none;
        }
    </style>

    <div class="container">
        <div class="row">
            <?php $__currentLoopData = $classes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $class): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4"> <!-- Decreased width by changing col-md-6 to col-md-4 -->
                    <div class="card">
                        <div class="card-header">
                            <h1>Class Information</h1>
                            <h5 class="card-title"><?php echo e($class->Name); ?></h5>
                            <p class="card-text">Branch: <?php echo e($class->Branch); ?></p>
                            <p class="card-text">Level: <?php echo e($class->Level); ?></p>
                            <p class="card-text">Year: <?php echo e($class->Year); ?></p>
                        </div>
                        <div class="card-body">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton<?php echo e($class->id); ?>" data-bs-toggle="dropdown" aria-expanded="false">
                                Show Students
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton<?php echo e($class->id); ?>">
                                <?php if(isset($students[$class->id])): ?>
                                    <?php $__currentLoopData = $students[$class->id]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li> <a href="<?php echo e(route("showProfile",$student->id)); ?>"><?php echo e($student->name); ?></a></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                    <li>No students found for this class</li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php if(empty($classes)): ?>
                <div class="col-md-12">
                    <p>No classes found for this teacher</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.min.js"></script>
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
<?php /**PATH C:\Users\Admin\Documents\PFE\ScholarNet\resources\views/teacher/Myclasses.blade.php ENDPATH**/ ?>