<?php if (isset($component)) { $__componentOriginal9881aee3032510140a884de503784c66 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9881aee3032510140a884de503784c66 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.master','data' => ['title' => 'assignment']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('master'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'assignment']); ?>
    <head>
        <link rel="stylesheet" href="<?php echo e(asset('css/uploadfile.css')); ?>">
    </head>
    <body style=" background-image: url('<?php echo e(asset('image/students-study-clipart-xl.png')); ?>');">
        <?php echo $__env->make('partials.flashbag', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="wrapper fadeInDown">
        <div id="formContent" >
          <h2 class="active"> Assignment </h2>
          <form method="POST" action="<?php echo e(route('emailPageVerify')); ?>">
            <?php echo csrf_field(); ?>
            <input type="file" id="login" class="fadeIn second" name="email" >
            <input type="submit" class="fadeIn fourth" value="Submit">
          </form>
      
          <!-- Remind Passowrd -->
          <div id="formFooter">
            <a class="underlineHover" href="<?php echo e(route('login')); ?>">Return to Assignment details</a>
          </div>
      
        </div>
      </div>
    </body>
    </html>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9881aee3032510140a884de503784c66)): ?>
<?php $attributes = $__attributesOriginal9881aee3032510140a884de503784c66; ?>
<?php unset($__attributesOriginal9881aee3032510140a884de503784c66); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9881aee3032510140a884de503784c66)): ?>
<?php $component = $__componentOriginal9881aee3032510140a884de503784c66; ?>
<?php unset($__componentOriginal9881aee3032510140a884de503784c66); ?>
<?php endif; ?><?php /**PATH C:\Users\user\Documents\PFE\ScholarNet\resources\views/student/submitmyassignment.blade.php ENDPATH**/ ?>