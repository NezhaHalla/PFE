<?php if (isset($component)) { $__componentOriginal9881aee3032510140a884de503784c66 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9881aee3032510140a884de503784c66 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.master','data' => ['title' => 'All Contacts']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('master'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'All Contacts']); ?>
    <style>
        /* Copy and paste the CSS styles here */

        html {
            box-sizing: border-box;
        }

        *,
        *:before,
        *:after {
            box-sizing: border-box;
        }

        body {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            background-color: #f9fafb;
            font-size: 70%;
            line-height: 1.4;
            font-family: "Inter", sans-serif;
            color: #6b7280;
            font-weight: 400;

            @media only screen and (min-width: 600px) {
                justify-content: center;
                align-items: center;
                display: flex;
                height: 100vh;
                font-size: 100%;
            }
        }

        .button {
            appearance: none;
            background: #16a34a;
            border-radius: 0.25em;
            color: white;
            cursor: pointer;
            display: inline-block;
            font-weight: 500;
            height: 3em;
            line-height: 3em;
            padding: 0 1em;

            &:hover {
                background-color: lighten(#16a34a, 2%);
            }
        }

        /* Add other styles here */

        .contact-item {
            cursor: pointer;
            padding: 1em;
            border-bottom: 1px solid #ccc;
        }

        .contact-details {
            display: none;
            background-color: #ffffff;
            border-radius: 0.5em;
            box-shadow: 0 10px 20px rgba(black, 0.2);
            max-width: 90%;
            padding: 1em;
            margin-top: 0.5em;
        }

        .contact-details.active {
            display: block;
        }

        .contact-details .close-button {
            text-align: right;
        }
    </style>

    <!-- Your content goes here -->
    <div class="container">
        <h1>All Contacts</h1>
        <ul>
            <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="contact-item">
                <?php echo e($contact->fname); ?> <?php echo e($contact->lname); ?> - <?php echo e($contact->email); ?>

                <div class="contact-details">
                    <div class="close-button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.7071 1.70711C14.0976 1.31658 14.0976 0.683417 13.7071 0.292893C13.3166 -0.0976311 12.6834 -0.0976311 12.2929 0.292893L7 5.58579L1.70711 0.292893C1.31658 -0.0976311 0.683417 -0.0976311 0.292893 0.292893C-0.0976311 0.683417 -0.0976311 1.31658 0.292893 1.70711L5.58579 7L0.292893 12.2929C-0.0976311 12.6834 -0.0976311 13.3166 0.292893 13.7071C0.683417 14.0976 1.31658 14.0976 1.70711 13.7071L7 8.41421L12.2929 13.7071C12.6834 14.0976 13.3166 14.0976 13.7071 13.7071C14.0976 13.3166 14.0976 12.6834 13.7071 12.2929L8.41421 7L13.7071 1.70711Z" fill="black" />
                        </svg>
                    </div>
                    <div class="details-modal-title">
                        <h1><?php echo e($contact->fname); ?>'s Details</h1>
                    </div>
                    <div class="details-modal-content">
                        <p>
                            First Name: <?php echo e($contact->fname); ?> <br>
                            Last Name: <?php echo e($contact->lname); ?> <br>
                            Email: <?php echo e($contact->email); ?> <br>
                            Subject: <?php echo e($contact->subject); ?> <br>
                            Message: <?php echo e($contact->message); ?> <br>
                            Created At: <?php echo e($contact->created_at); ?>

                        </p>
                    </div>
                </div>
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>

    <script>
        // Script to toggle contact details visibility
        document.querySelectorAll('.contact-item').forEach(item => {
            item.addEventListener('click', () => {
                item.querySelector('.contact-details').classList.toggle('active');
            });
        });
    </script>
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
<?php /**PATH C:\Users\user\Documents\PFE\ScholarNet\resources\views/admin/contacts.blade.php ENDPATH**/ ?>