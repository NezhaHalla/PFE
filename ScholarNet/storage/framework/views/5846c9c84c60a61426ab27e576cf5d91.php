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
        html {
            box-sizing: border-box;
        }

        *,
        *::before,
        *::after {
            box-sizing: inherit;
        }

        body {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            background-color: #f9fafb;
            font-size: 70%;
            line-height: 1.4;
            font-family: "Inter", sans-serif;
            color: black;
            font-weight: 400;

            @media only screen and (min-width: 600px) {
                justify-content: center;
                align-items: center;
                display: flex;
                height: 100vh;
                font-size: 100%;
            }
        }

        .container {
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            margin-top: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border-bottom: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f0f0f0;
        }

        .contact-item {
            cursor: pointer;
            display: table-row;
        }

        .contact-item a {
            text-decoration: none;
            color: black;
            display: table-cell;
        }

        .contact-item:hover {
            background-color: #f0f0f0;
        }

        .contact-details {
            display: none;
            background-color: #ffffff;
            border-radius: 0.5em;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            max-width: 90%;
            padding: 1em;
            margin-top: 0.5em;
            text-decoration: none;
        }

        .contact-details.active {
            display: block;
        }

        .contact-details .close-button {
            text-align: right;
            text-decoration: none;
        }

        .close-button svg {
            width: 14px;
            height: 14px;
            fill: #000;
        }
    </style>

    <!-- Your content goes here -->
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="contact-item">
                    <td><?php echo e($contact->fname); ?> <?php echo e($contact->lname); ?></td>
                    <td>
                        <a title="show-details" href="<?php echo e(route('contacts.show', ['id' => $contact->id])); ?>">
                            <?php echo e(strlen($contact->message) > 15? substr($contact->message, 0, 15) . '.......' : $contact->message); ?>

                        </a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
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
<?php /**PATH C:\Users\Admin\Documents\PFE\ScholarNet\resources\views/admin/contacts.blade.php ENDPATH**/ ?>