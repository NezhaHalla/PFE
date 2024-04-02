
   <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
        <link href="<?php echo e(asset('css/bar.css')); ?>" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-PABJxUqZ0uLFr7V9yZAB+gpdUCGr3nu8n1DPTzkFX8fQynWpYRJ6CBrD/0jHwCzD/z7DY3BA5U/GvCKMy+WXfQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <?php if(auth()->check()): ?>
        <?php
            $student = auth()->user();
            $unreadressoureCount = $student->modules->flatMap->resource->where('is_readr', false)->count();
        ?>
    <?php endif; ?>
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
        <a href="#" style="text-decoration: none;color:white;margin-left:265px;position: absolute;bottom:25%">You're in <?php echo e($title); ?></a>
        
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
        <a href="#" style="text-decoration: none;color:white;margin-left:265px;position: absolute;bottom:25%">You're in <?php echo e($title); ?></a>
        <ul>
            <li><a class="active" href="<?php echo e(route('home')); ?>">Home</a></li>
            <li>
                <a href="#"> <i class="fas fa-bell"></i>
                    <?php if($unreadressoureCount > 0): ?>
                    <span class="badge"><?php echo e($unreadressoureCount); ?></span> </i>
                     <?php endif; ?> Class
                    <i class="fas fa-caret-down"></i>
                    </a>
                <ul>
                    <li><a href="<?php echo e(route('Myclasse')); ?>">My Class</a></li>
                    <li><a href="<?php echo e(route('myCourses')); ?>">Courses
                        <?php if($unreadressoureCount > 0): ?>
                        <span class="badge"><?php echo e($unreadressoureCount); ?></span> </i>
                         <?php endif; ?>
                        </a></li>
                    <li><a href="<?php echo e(route('Assignments')); ?>">Assignments</a></li>
                    <li><a href="<?php echo e(route('exercice.index')); ?>">Submission</a></li>

                </ul>
            </li>
            <li>
                <a href="#">Results<i class="fas fa-caret-down"></i></a>
                <ul>
                    <li><a href="<?php echo e(route('module')); ?>">Module</a></li>
                    <li><a href="<?php echo e(route('notesS')); ?>">Soumestre</a></li>
                    <li><a href="<?php echo e(route('year')); ?>">Year</a></li>
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
        <a href="#" style="text-decoration: none;color:white;margin-left:265px;position: absolute;bottom:25%">You're in <?php echo e($title); ?></a>
        
        <ul>
            <li><a class="active" href="<?php echo e(route('home')); ?>">Home</a></li>
            <li>
                <a href="#">Classes<i class="fas fa-caret-down"></i></a>
                <ul>
                    <li><a href="<?php echo e(route('Myclass')); ?>">My Classes</a></li>
                     <li><a href="<?php echo e(route('add_resource_form')); ?>">Add course</a></li>
                    <li><a href="<?php echo e(route('MyCourses')); ?>">My courses</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Assignments<i class="fas fa-caret-down"></i></a>
                <ul>
                    <li><a href="<?php echo e(route('assignmentscreate')); ?>">Add Assignment</a></li>
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
<?php /**PATH C:\Users\user\Documents\PFE\ScholarNet\resources\views/partials/bar.blade.php ENDPATH**/ ?>