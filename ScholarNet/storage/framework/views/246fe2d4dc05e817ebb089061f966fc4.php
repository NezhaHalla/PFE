<?php if (isset($component)) { $__componentOriginal9881aee3032510140a884de503784c66 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9881aee3032510140a884de503784c66 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.master','data' => ['title' => $Assignment->titre]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('master'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($Assignment->titre)]); ?>
    <head>
        <link href="<?php echo e(asset('css/details.css')); ?>" rel="stylesheet">
        <style>
            .doc {
                display: flex;
                border: 1px solid #ccc;
                position: relative;
                padding: 0px;
                margin:0px;
                height:80px;
                border-radius: 20%;
                bottom: -35px;
                z-index: 1000;
                }

                .div2 {

                    font-size: 18px;
                    position: absolute;
                    top:-5px;
                }

                .aadd{
                    color: blueviolet;
                    text-decoration: underline;
                    font-family: Georgia, 'Times New Roman', Times, serif;
                }

                .div3 {
                    color: grey;
                    position: absolute;
                    right:10px;
                    top: 40%;
                }
        </style>
    </head>
    <body>
       
        <div class="center-container">
        <div class="card-list">
            <article class="card">
                <div class="card-header">
                    <img src="<?php echo e(asset('storage/'.$Assignment->teacher->image)); ?>" alt="">
                    <div><a href="<?php echo e(route("showProfile",$Assignment->teacher->id)); ?>"><?php echo e($Assignment->teacher->name); ?></a></div>
                    <div><?php echo e($Assignment->createdAt); ?></div>
                </div>
                <div class="card-header">
                    <div>Deadline : <?php echo e($Assignment->deadline); ?></div>
                </div>
                <figure class="card-image">
                    <div><?php echo e($Assignment->titre); ?></div>
                    <div><?php echo e($Assignment->description); ?></div>
                    <?php if(trim($Assignment->fichier) !== '' || $Assignment->fihier !== null ): ?>
                    <div class="doc">
                        <div class="div2"><a title="Download"  class="aadd" href="<?php echo e(route('showdocA',$Assignment)); ?>"><?php echo e($Assignment->titre.'.docx'); ?></a></div>
                        <div class="div3">size : <?php echo e($fileSizeInKB); ?> KB</div>
                    </div>
                    <div style="bottom:20px;">
                    <?php endif; ?>
                    <?php if(auth()->user()->id === $Assignment->teacher->id): ?>
                    <form action="<?php echo e(route('assignments.destroy',$Assignment->id)); ?>" method="post">
                        <?php echo method_field('DELETE'); ?>
                        <?php echo csrf_field(); ?>
                        <button class="sup" onclick="return confirm('Do you want to delete this Assignment ?')"  >Delete</button>
                    </form>
                    <?php endif; ?>
                    <?php if(auth()->user()->role === "Student"): ?>
                        <?php if(strtotime($Assignment->deadline) > strtotime(now())): ?>
                            <div class="d-grid gap-2 col-6 mx-auto" >
                                <a href="<?php echo e(route('studentsubass',$Assignment->id)); ?>" class="btn btn-success" type="button" style="position:absolute; bottom: 20px;left:23%;width:500px;height:40px;">Submit My Assignment</a>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?> 
                    </div>
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

<?php /**PATH C:\Users\Admin\Documents\PFE\ScholarNet\resources\views/student/detailA.blade.php ENDPATH**/ ?>