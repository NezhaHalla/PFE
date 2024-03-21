<?php if (isset($component)) { $__componentOriginal9881aee3032510140a884de503784c66 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9881aee3032510140a884de503784c66 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.master','data' => ['title' => 'My Assignments']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('master'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'My Assignments']); ?>
    <div class="ag-format-container">
        <div class="ag-courses_box card-container"> <!-- Added class "card-container" -->
            <?php $__currentLoopData = $assignments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $assignment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="ag-courses_item card"> <!-- Added class "card" -->
                    <a href="#" class="ag-courses-item_link"> <!-- Changed div to anchor -->
                        <div class="ag-courses-item_bg"></div>

                        <div class="ag-courses-item_title">
                            <?php echo e($assignment->role); ?>

                        </div>

                        <div class="ag-courses-item_date-box">
                            <h5 class="card-title"><?php echo e($assignment->titre); ?></h5>
                            <p class="card-text"><strong>Deadline:</strong> <?php echo e($assignment->deadline); ?></p>

                            <a href="<?php echo e(route('assignments.show', ['assignment' => $assignment->id])); ?>" class="btn btn-primary">Details</a>
                        </div>
                    </a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
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

<style>
    /* General styles */
    body {
        background-color: #ffffff;
    }

    .ag-format-container {
        width: 100%;
        max-width: 1142px;
        margin: 0 auto;
        padding: 0 15px; /* Add padding to prevent horizontal overflow */
    }

    /* Course box styles */
    .ag-courses_box {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        padding: 50px 0;
    }

    /* Course item styles */
    .ag-courses_item {
        width: calc(33.333% - 30px); /* Adjust the width as needed */
        margin-bottom: 20px;
        flex-shrink: 0; /* Ensure cards don't shrink */
        font-size: 40px;
    }

    /* Course item link styles */
    .ag-courses-item_link {
        display: flex; /* Use flexbox */
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
        position: relative;
        overflow: hidden;
        padding: 30px;
        background-color: #fcfbfb;
        border-radius: 28px;
        text-decoration: none;
        color: #111010;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add shadow for depth */
    }

    .ag-courses-item_link:hover .ag-courses-item_bg {
        transform: scale(10);
    }

    /* Course item background styles */
    .ag-courses-item_bg {
        height: 128px;
        width: 128px;
        background-color: #131846;
        position: absolute;
        top: -75px;
        right: -75px;
        border-radius: 50%;
        transition: all 0.5s ease;
    }

    /* Course item title styles */
    .ag-courses-item_title {
        min-height: 87px;
        margin-bottom: 25px;
        font-weight: bold;
        font-size: 30px;
        line-height: 1.2;
        text-align: center;
    }

    /* Course item date box styles */
    .ag-courses-item_date-box {
        font-size: 18px;
        color: #fff;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    /* Course item date styles */
    .ag-courses-item_date {
        font-weight: bold;
        color: #f9b234;
        transition: color 0.5s ease;
    }

    /* Media query for smaller screens */
    @media only screen and (max-width: 979px) {
        .ag-courses_item {
            width: calc(50% - 30px); /* Adjust the width for smaller screens */
        }
    }

    @media only screen and (max-width: 639px) {
        .ag-courses_item {
            width: calc(100% - 30px); /* Full width for smaller screens */
        }
    }
</style>
<?php /**PATH C:\Users\Admin\Documents\PFE\ScholarNet\resources\views/teacher/myAssignement.blade.php ENDPATH**/ ?>