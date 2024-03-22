<?php if (isset($component)) { $__componentOriginal9881aee3032510140a884de503784c66 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9881aee3032510140a884de503784c66 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.master','data' => ['title' => 'My Account']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('master'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'My Account']); ?>
    <section style="background-color: #ffffff;">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="<?php echo e(asset('storage/'.auth()->user()->image)); ?>" alt="avatar" class="rounded-circle img-fluid img-square" style="width: 200px;height:200px">
                            <h5 class="my-3"><?php echo e(auth()->user()->name); ?></h5>
                            <p class="text-muted mb-1"><?php echo e(auth()->user()->role); ?> in ScholarNet</p>
                </div>
              </div>

            <?php if(auth()->user()->role === "Student"): ?>
            <div class="card mb-4 mb-lg-0">
                <div class="card-body p-0">
                  <ul class="list-group list-group-flush rounded-3">
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <button type="button" class="btn btn-primary" style="width: 100%; height:100%;">My Saved Courses</button>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <button type="button" class="btn btn-primary" style="width: 100%; height:100%;">My Submitted Assignments</button>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <a href="<?php echo e(route('password.show')); ?>" type="button" class="btn btn-primary" style="width: 100%; height:100%;">Modify Password</a>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <a href="<?php echo e(route('logout')); ?>" type="button" class="btn btn-danger" style="width: 100%; height:100%;" >Exit</a>
                    </li>
                  </ul>
                </div>
              </div>
            <?php endif; ?>

            <?php if(auth()->user()->role === "Teacher"): ?>
            <div class="card mb-4 mb-lg-0">
                <div class="card-body p-0">
                  <ul class="list-group list-group-flush rounded-3">
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <a href="<?php echo e(route('MyCourses')); ?>"type="button" class="btn btn-primary" style="width: 100%; height:100%;">My Courses</a>

                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <a href="<?php echo e(route('Assignmentt')); ?>" type="button" class="btn btn-primary" style="width: 100%; height:100%;">My Assignments</a>

                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <a href="<?php echo e(route('password.show')); ?>" type="button" class="btn btn-primary" style="width: 100%; height:100%;">Modify Password</a>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <a href="<?php echo e(route('logout')); ?>" type="button" class="btn btn-danger" style="width: 100%; height:100%;" >Exit</a>
                    </li>
                  </ul>
                </div>
              </div>
            <?php endif; ?>

            <?php if(auth()->user()->role === "Admin"): ?>
            <div class="card mb-4 mb-lg-0">
                <div class="card-body p-0">
                  <ul class="list-group list-group-flush rounded-3">
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <a href="<?php echo e(route('password.show')); ?>" type="button" class="btn btn-primary" style="width: 100%; height:100%;">Modify Password</a>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <a href="<?php echo e(route('logout')); ?>" type="button" class="btn btn-danger" style="width: 100%; height:100%;" >Exit</a>
                    </li>
                  </ul>
                </div>
              </div>
            <?php endif; ?>



            </div>
            <div class="col-lg-8">
              <div class="card mb-4">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Full Name</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0"><?php echo e(auth()->user()->name); ?></p>
                    </div>
                  </div>
                  <hr>
                  <?php if(auth()->user()->role === "Student"): ?>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Class</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">Study <?php echo e($class->Branch); ?>, In <?php echo e($class->Level); ?></p>
                    </div>
                  </div>
                  <hr>
                  <?php endif; ?>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Email</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0"><?php echo e(auth()->user()->email); ?></p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Date Of Birth</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0"><?php echo e(Str::limit(auth()->user()->DateDeNaissance,11,'')); ?></p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Gender</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0"><?php echo e(auth()->user()->gender); ?></p>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
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
<?php /**PATH C:\Users\Admin\Documents\PFE\ScholarNet\resources\views/common/profile.blade.php ENDPATH**/ ?>