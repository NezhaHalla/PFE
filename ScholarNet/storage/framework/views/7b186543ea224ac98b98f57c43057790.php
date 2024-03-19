<head>
    <link href="<?php echo e(asset('css/emailPage1.css')); ?>" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <title>Verify E-mail</title>
</head>
<body style=" background-image: url('<?php echo e(asset('image/lady-girl-tweeting-laptop-clipart-xl.png')); ?>');">
    <?php echo $__env->make('partials.flashbag', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="wrapper fadeInDown">
    <div id="formContent" >
      <!-- Tabs Titles -->
      <h2 class="active"> ScholarNet </h2>
      
        

      <form method="POST" action="<?php echo e(route('verify')); ?>">
        <?php echo csrf_field(); ?>
        <input type="text" id="login" class="fadeIn second" name="code" placeholder="Enter The Verification Code">
        <?php $__errorArgs = ['code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="text-danger"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <input type="submit" class="fadeIn fourth" value="Submit">
      </form>

      
      <div id="formFooter">Your E-mail : nezhahella@gmail.com .
        <a class="underlineHover" href="<?php echo e(route('emailPage')); ?>">Modify ?</a>
      </div>
  
    </div>
  </div>
</body><?php /**PATH C:\Users\user\Documents\PFE\ScholarNet\resources\views/forgetPassword/verifyCodePage.blade.php ENDPATH**/ ?>