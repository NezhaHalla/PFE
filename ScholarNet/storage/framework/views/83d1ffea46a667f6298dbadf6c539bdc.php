<head>
    <link href="<?php echo e(asset('css/emailPage2.css')); ?>" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <title>New Password</title>
</head>
<body style=" background-image: url('<?php echo e(asset('image/0012185-2-clipart-xl.png')); ?>');">
    <?php echo $__env->make('partials.flashbag', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="wrapper fadeInDown">
    <div id="formContent" >
      <!-- Tabs Titles -->
      <h2 class="active"> ScholarNet </h2>
  
      <!-- Login Form -->
      <form method="POST" action="<?php echo e(route('newPasswordConf')); ?>">
        <?php echo csrf_field(); ?>
        <input type="password" id="login" class="fadeIn second" name="password" placeholder="Enter Your New Password">
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
        <input type="password" id="login" class="fadeIn second" name="password_confirmation" placeholder="Confirm New Password">
        <input type="submit" class="fadeIn fourth" value="Submit">
      </form>
  
    </div>
  </div>
</body><?php /**PATH C:\Users\Admin\Documents\PFE\ScholarNet\resources\views/forgetPassword/newPasswordPage.blade.php ENDPATH**/ ?>