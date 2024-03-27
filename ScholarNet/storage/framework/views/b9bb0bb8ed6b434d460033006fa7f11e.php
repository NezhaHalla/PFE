
   <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
        <link href="<?php echo e(asset('css/bar.css')); ?>" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-PABJxUqZ0uLFr7V9yZAB+gpdUCGr3nu8n1DPTzkFX8fQynWpYRJ6CBrD/0jHwCzD/z7DY3BA5U/GvCKMy+WXfQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   </head>
   <body>
    <?php if(auth()->guard()->check()): ?>
    <?php if(auth()->user()->role === 'Admin'): ?>
    <nav>

        <a href="javascript:void(0);" onclick="history.back();" style="color: aliceblue;font-size:25px">
            <label for="exampleInputname" class="formbold-form-label"><i class="fas fa-arrow-left"></i></label>
        </a>

        <label class="logo" >ScolarNet</label>
        <ul>
            <li><a class="active" href="<?php echo e(route('home')); ?>">Home</a></li>
            <li>
                <a href="<?php echo e(route('contacts.index')); ?>" class="notification-icon">
                    <i class="fas fa-bell"></i>

                    <?php if($unreadMessageCount > 0): ?>
                        <span class="badge"><?php echo e($unreadMessageCount); ?></span>
                    <?php endif; ?>
                    Message </a>
            </li>
            <li>
                <a href="#">System<i class="fas fa-caret-down"></i></a>
                <ul>
                    <li><a href="<?php echo e(route('publication.create')); ?>">Add Publication</a></li>
                    <li><a href="<?php echo e(route('adduser')); ?>">Add User</a></li>
                    <li><a href="<?php echo e(route('class.create')); ?>">Add Class</a></li>
                </ul>
            </li>

            <li>
                <a href="#">Classes<i class="fas fa-caret-down"></i></a>
                <ul>
                    <li><a href="<?php echo e(route('all_classes')); ?>">All Classes</a></li>
                    <li><a href="<?php echo e(route('all.teachers')); ?>">All Teachers</a></li>

                </ul>
            </li>
            <li>
                <a href="#" class="dec"><?php echo e(auth()->user()->name); ?><i class="fas fa-caret-down"></i></a>
                <ul>
                    <li><a href="<?php echo e(route('profile')); ?>">My Account</a></li>
                    <li><a href="<?php echo e(route('logout')); ?>">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <?php elseif(auth()->user()->role === 'Student'): ?>
    <nav>
        <a href="javascript:void(0);" onclick="history.back();" style="color: aliceblue;font-size:25px">
            <label for="exampleInputname" class="formbold-form-label"><i class="fas fa-arrow-left"></i></label>
        </a>

        <label class="logo">ScolarNet</label>
        <ul>
            <li><a class="active" href="<?php echo e(route('home')); ?>">Home</a></li>
            <li>
                <a href="#">Class<i class="fas fa-caret-down"></i></a>
                <ul>
                    <li><a href="<?php echo e(route('Myclasse', ['studentId' => auth()->id()])); ?>">My Class</a></li>
                    <li><a href="<?php echo e(route('myCourses')); ?>">Courses</a></li>
                    <li><a href="<?php echo e(route('Assignments')); ?>">Assignments</a></li>
                    <li><a href="<?php echo e(route('studentsubass')); ?>">Submission</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Results<i class="fas fa-caret-down"></i></a>
                <ul>
                    <li><a href="">Module</a></li>
                    <li><a href="#">Soumestre</a></li>
                    <li><a href="#">Year</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="dec"><?php echo e(auth()->user()->name); ?><i class="fas fa-caret-down"></i></a>
                <ul>
                    <li><a href="<?php echo e(route('profile')); ?>">My Account</a></li>
                    <li><a href="<?php echo e(route('logout')); ?>">Logout</a></li>
                </ul>
            </li>
            <li><a></a><i></i></li>
                <div class="profile-image">
                    <img src="<?php echo e(asset('storage/'.auth()->user()->image)); ?>" alt="Profile Image">
                </div>
        </ul>
    </nav>
    <?php elseif(auth()->user()->role === 'Teacher'): ?>
    <nav>

        <a href="javascript:void(0);" onclick="history.back();" style="color: aliceblue;font-size:25px">
            <label for="exampleInputname" class="formbold-form-label"><i class="fas fa-arrow-left"></i></label>
        </a>

        <label class="logo">ScolarNet</label>
        <ul>
            <li><a class="active" href="<?php echo e(route('home')); ?>">Home</a></li>
            <li>
                <a href="#">Classes<i class="fas fa-caret-down"></i></a>
                <ul>
                    <li><a href="<?php echo e(route('Myclass', ['teacherId' => auth()->id()])); ?>">My Classes</a></li>
                     <li><a href="<?php echo e(route('add_resource_form')); ?>">Add course</a></li>
                    <li><a href="<?php echo e(route('MyCourses')); ?>">My courses</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Assinments<i class="fas fa-caret-down"></i></a>
                <ul>
                    <li><a href="<?php echo e(route('assignmentscreate')); ?>">Add Assinment</a></li>
                    <li><a href="<?php echo e(route('Assignmentt')); ?>">My Assignments</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="dec"><?php echo e(auth()->user()->name); ?><i class="fas fa-caret-down"></i></a>
                <ul>
                    <li><a href="<?php echo e(route('profile')); ?>">My Account</a></li>
                    <li><a href="<?php echo e(route('logout')); ?>">Logout</a></li>
                </ul>
            </li>
            <li><a></a><i></i></li>
                <div class="profile-image">
                    <img src="<?php echo e(asset('storage/'.auth()->user()->image)); ?>" alt="Profile Image">
                </div>
        </ul>
    </nav>
    <?php endif; ?>


    <?php endif; ?>
    <?php if(auth()->guard()->guest()): ?>
    <nav>
        <label class="logo">ScolarNet</label>
        <ul>


            <li class="nav-item">
                <a href="<?php echo e(route('showlogin')); ?>" class="dec">Login</a>
            </li>


        </ul>
    </nav>
    <?php endif; ?>
   </body>
</html>
<?php /**PATH C:\Users\Admin\Documents\PFE\ScholarNet\resources\views/partials/bar.blade.php ENDPATH**/ ?>