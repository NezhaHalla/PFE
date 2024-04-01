<?php if (isset($component)) { $__componentOriginal9881aee3032510140a884de503784c66 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9881aee3032510140a884de503784c66 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.master','data' => ['title' => 'My Modules']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('master'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'My Modules']); ?>
    <head>
        <link rel="stylesheet" href="<?php echo e(asset('css/module.css')); ?>">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <style>
            .card {
                max-width: 400px; 
            }
        </style>
    </head>
    <body>

        <div style="padding-top: 150px;" class="container mb-5">
            <div class="pricing card-deck flex-column flex-md-row mb-3">
                <div class="card card-pricing popular shadow text-center px-3 mb-4" >
                    <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">Programming Web</span>
                    <div class="card-body pt-0">
                        <ul class="list-unstyled mb-4">
                            <li>Note : <span class="bold">14.25</span> </li>
                            <li>Validation : <span class="bold">Validé</span></li>
                        </ul>
                        <button type="button" class="btn btn-outline-secondary mb-3">See Details</button>
                    </div>
                </div>

                <div class="card card-pricing popular shadow text-center px-3 mb-4" >
                    <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">Mathematique</span>
                    <div class="card-body pt-0">
                        <ul class="list-unstyled mb-4">
                            <li>Note : <span class="bold">14.25</span></li>
                            <li>Validation : <span class="bold">Validé</span></li>
                        </ul>
                        <button type="button" class="btn btn-outline-secondary mb-3">See Details</button>
                    </div>
                </div>
                <div class="card card-pricing popular shadow text-center px-3 mb-4" >
                    <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">Mathematique</span>
                    <div class="card-body pt-0">
                        <ul class="list-unstyled mb-4">
                            <li>Note : <span class="bold">17.25</span> </li>
                            <li>Validation : <span class="bold">Validé</span></li>
                        </ul>
                        <button type="button" class="btn btn-outline-secondary mb-3">See Details</button>
                    </div>
                </div>
                <div  class="card card-pricing popular shadow text-center px-3 mb-4" >
                    <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">Mathematique</span>
                    <div class="card-body pt-0">
                        <ul class="list-unstyled mb-4">
                            <li>Note : <span class="bold">19.25</span></li>
                            <li>Validation : <span class="bold">Validé</span></li>
                        </ul>
                        <button type="button" class="btn btn-outline-secondary mb-3"><a style="text-decoration:none; color:grey;" href="<?php echo e(route("module.detail")); ?>">See Details</a></button>
                    </div>
                </div>
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
<?php /**PATH C:\Users\Admin\Documents\PFE\ScholarNet\resources\views/student/moduleCard.blade.php ENDPATH**/ ?>