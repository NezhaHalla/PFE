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
                    <p class="card-text">Branch: <?php echo e($class->Branch); ?></p>
                    <p class="card-text">Level: <?php echo e($class->Level); ?></p>
                    <p class="card-text">Year: <?php echo e($class->Year); ?></p>
                    <a href="<?php echo e(route('showAllStudents', ['class_id' => $class->id])); ?>" class="btn btn-primary">Show Students</a>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Roboto:400,400i,700");
body {
            font-family: Roboto, sans-serif;
           min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #EFEFEF;

        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;

        }
.card-container {
    display: flex;
    gap: 20px;
    justify-content: center;
    flex-wrap: wrap;
    margin-top: 20px;

}
.card {
    background: #fff;

    border-radius: 4px;
    box-shadow: 0px 14px 80px rgba(34, 35, 58, 0.5);
    max-width: 400px;
    max-height: 400px;
    display: flex;
    flex-direction: row;
    border-radius: 25px;
    position: relative;
    overflow: hidden;
}
.card h2 {
  margin: 0;
  padding: 0 1rem;
}
.card .title {
  padding: 1rem;
  text-align: right;
  color: #063247;
  font-weight: bold;
  font-size: 12px;
}
.card .desc {
  padding: 0.5rem 1rem;
  font-size: 12px;
}
.card .actions {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  align-items: center;
  padding: 0.5rem 1rem;
}
.card svg {
  width: 85px;
  height: 85px;
  margin: 0 auto;
}

.img-avatar {
  width: 80px;
  height: 80px;
  position: absolute;
  border-radius: 50%;
  border: 6px solid white;
  background-image: linear-gradient(-60deg, #063247 0%, #2a57b9 100%);
  top: 15px;
  left: 85px;
}

.card-text {
  display: grid;
  grid-template-columns: 1fr 2fr;
}

.title-total {
  padding: 2.5em 1.5em 1.5em 1.5em;
}

path {
  fill: white;
}

.img-portada {
  width: 100%;
}

.portada {
  width: 100%;
  height: 100%;
  border-top-left-radius: 20px;
  border-bottom-left-radius: 20px;

   background-position: bottom center;
  background-size: cover;
}




.actions {
  display: flex;
  justify-content: flex-end;
  margin-top: 10px;
}

.actions a {
  text-decoration: none;
  padding: 8px 16px;
  margin-left: 10px;
  border-radius: 4px;
  font-weight: bold;
  color: #fff;
}

.actions a.delete {
  background-color: #FF6347; /* Red color for Delete button */
}

.actions a.modify {
  background-color: #4682B4; /* Blue color for Modify button */
}

/* Hover effect */
.actions a:hover {
  opacity: 0.8;
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
<?php /**PATH C:\Users\user\Documents\PFE\ScholarNet\resources\views/admin/all_classes.blade.php ENDPATH**/ ?>