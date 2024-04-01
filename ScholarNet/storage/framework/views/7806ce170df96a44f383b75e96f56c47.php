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
        <style>
            /* CSS styles for Contact Details page */
            body {
                font-family: Arial, sans-serif;
                background-color: #f9fafb;
                margin: 0;
                padding: 0;
            }

            .center-container {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }

            .card-list {
                width: 90%;
                max-width: 900px;
            }

            .card {
                background-color: #fff;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                padding: 80px; /* Increased padding to increase height */
                position: relative; /* Add relative positioning */
            }

            h1 {
                font-size: 24px;
                color: #333;
                margin-bottom: 20px;
                text-align: center;
            }

            p {
                font-size: 16px;
                color: #666;
                margin-bottom: 10px;
            }

            strong {
                font-weight: bold;
            }

            .message-container {
                border: 1px solid #242323;
                border-radius: 5px;
                padding: 10px;
            }

            /* Adjust position of Created At */
            .created-at {
                position: absolute;
                top: 20px;
                right: 20px;
                font-size: 14px;
                color: #999;
            }

            /* Adjust position of Email */

        </style>
    </head>
    <body>
        <div class="center-container">
            <div class="card-list">
                <article class="card">
                    <h1><?php echo e($contact->fname); ?>  <?php echo e($contact->lname); ?></h1>

                    <p></p>
                    <p class="email"><strong>Email:</strong><?php echo e($contact->email); ?></p>
                    <p><strong>Subject:</strong> <?php echo e($contact->subject); ?></p>
                    <div class="message-container">
                        <p><strong>Message:</strong></p>
                        <p><?php echo e($contact->message); ?></p>
                    </div>
                    <!-- Move Created At to the top right -->
                    <p class="created-at"> <?php echo e($contact->created_at); ?></p>
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
<?php /**PATH C:\Users\user\Documents\PFE\ScholarNet\resources\views/admin/contactsdetails.blade.php ENDPATH**/ ?>