<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-image: url('<?php echo e(asset('image/back.avif')); ?>');
            background-size: cover;
            background-position: center;
            height: 100vh;
        }

        .card {
            background-color: #ffffff;
            border: none;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        .card-title {
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }

        .card-img {
            width: 150px;
            height: auto;
        }

        .form-control {
            border-radius: 10px;
        }

        .btn-primary {
            border-radius: 10px;
        }

            .titre {
        color: #0d0d0d;
        font-size: 40px;
        font-family: Georgia;
        
    }
    </style>
</head>
<body>
<?php echo $__env->make('partials.flashbag', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container py-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-6">
            <div class="card rounded-3 shadow-lg p-5">
                <div class="text-center mb-4">
                    <h4 class="card-title mb-4 titre">ScholarNet</h4>
                </div>
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
                <form action="<?php echo e(route('login')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="mb-4">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="<?php echo e(old('email')); ?>">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="remember" name="remember">
                        <label class="form-check-label" for="remember">Remember me</label>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary btn-lg">Login</button>
                    </div>
                    <div class="text-center mt-3">
                        <a href="<?php echo e(route("emailPage")); ?>" class="text-muted">Forgot password?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
<?php /**PATH C:\Users\Admin\Documents\PFE\ScholarNet\resources\views/auth/login.blade.php ENDPATH**/ ?>