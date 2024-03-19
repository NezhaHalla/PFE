<?php if (isset($component)) { $__componentOriginal9881aee3032510140a884de503784c66 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9881aee3032510140a884de503784c66 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.master','data' => ['title' => 'AllClass']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('master'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'AllClass']); ?>
    <div class="card-container">
        <?php $__currentLoopData = $classes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $class): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?php echo e($class->Name); ?></h5>
                    <p class="card-text"><strong>Branch:</strong> <?php echo e($class->Branch); ?></p>
                    <p class="card-text"><strong>Level:</strong> <?php echo e($class->Level); ?></p>
                    <p class="card-text"><strong>Year:</strong> <?php echo e($class->Year); ?></p>
                    <a href="<?php echo e(route('showAllStudents', ['class_id' => $class->id])); ?>" class="btn btn-primary">Show Students</a>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <style>
       body {
            font-family: Roboto, sans-serif;
           min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #EFEFEF;

        }

        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }
        .card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin-bottom: 20px;
        }
        .card-body {
            padding: 20px;
        }
        .card-title {
            font-size: 1.25rem;
            margin-bottom: 10px;
            color: #333;
        }
        .card-text {
            margin-bottom: 10px;
            color: #666;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            color: #fff;
            text-decoration: none;
            padding: 8px 16px;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
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
<?php /**PATH C:\Users\Admin\Documents\PFE\ScholarNet\resources\views/admin/all_classes.blade.php ENDPATH**/ ?>