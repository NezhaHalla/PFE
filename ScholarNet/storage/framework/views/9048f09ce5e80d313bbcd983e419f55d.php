<?php if (isset($component)) { $__componentOriginal9881aee3032510140a884de503784c66 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9881aee3032510140a884de503784c66 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.master','data' => ['title' => 'Contact Details']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('master'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Contact Details']); ?>
    <head>
        <link href="<?php echo e(asset('css/details.css')); ?>" rel="stylesheet">
        <style>
            .card {
                background-color: rgb(223, 223, 223); /* Change the background color */
                border-radius: 10px; /* Add border radius for styling */
                padding: 20px; /* Add padding for spacing */
            }

            h1 {
                color: #000; /* Black color */
                font-size: 24px;
                margin-bottom: 20px;
                text-align: center;

            }

            p {
                color: #000; /* Black color */
                font-size: 18px;
                margin-bottom: 10px;
            }
        </style>
    </head>
    <div class="center-container">
        <div class="card-list">
            <article class="card">
                <h1>Contact Details</h1>
                <p><strong> Name:  </strong><?php echo e($contact->fname); ?></p>
                <p><strong>Last Name:  </strong><?php echo e($contact->lname); ?></p>
                <p><strong>Email: </strong> <?php echo e($contact->email); ?></p>
                <p><strong>Subject:  </strong><?php echo e($contact->subject); ?></p>
                <p><strong>Message: </strong> <?php echo e($contact->message); ?></p>
                <p><strong>Created At: </strong><?php echo e($contact->created_at); ?></p>
            </article>
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
<?php /**PATH C:\Users\Admin\Documents\PFE\ScholarNet\resources\views/admin/contactsdetails.blade.php ENDPATH**/ ?>