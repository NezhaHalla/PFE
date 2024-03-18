
   <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
        <link href="{{ asset('css/bar.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-PABJxUqZ0uLFr7V9yZAB+gpdUCGr3nu8n1DPTzkFX8fQynWpYRJ6CBrD/0jHwCzD/z7DY3BA5U/GvCKMy+WXfQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   </head>
   <body>
    @auth
    @if (auth()->user()->role === 'Admin')
    <nav>
        
        <a href="javascript:void(0);" onclick="history.back();" style="color: aliceblue;font-size:25px">
            <label for="exampleInputname" class="formbold-form-label"><i class="fas fa-arrow-left"></i></label>
        </a>
             
        <label class="logo" >ScolarNet</label>
        <ul>
            <li><a class="active" href="{{ route('home') }}">Home</a></li>
            <li>
                <a href="#">System<i class="fas fa-caret-down"></i></a>
                <ul>
                    <li><a href="{{ route('publication.create') }}">Add Publication</a></li>
                    <li><a href="{{ route('adduser') }}">Add User</a></li>
                    <li><a href="{{ route('class.create') }}">Add Class</a></li>
                </ul>
            </li>

            <li>
                <a href="#">Classes<i class="fas fa-caret-down"></i></a>
                <ul>
                    <li><a href="{{ route('all_classes') }}">All Classes</a></li>
                    <li><a href="{{ route('all.teachers') }}">All Teachers</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="dec">{{ auth()->user()->name }}<i class="fas fa-caret-down"></i></a>
                <ul>
                    <li><a href="{{ route('profile') }}">My Account</a></li>
                    <li><a href="{{ route('logout') }}">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    @elseif(auth()->user()->role === 'Student')
    <nav>
        <a href="javascript:void(0);" onclick="history.back();" style="color: aliceblue;font-size:25px">
            <label for="exampleInputname" class="formbold-form-label"><i class="fas fa-arrow-left"></i></label>
        </a>
             
        <label class="logo">ScolarNet</label>
        <ul>
            <li><a class="active" href="{{ route('home') }}">Home</a></li>
            <li>
                <a href="#">Class<i class="fas fa-caret-down"></i></a>
                <ul>
                    <li><a href="{{ route('Myclasse', ['studentId' => auth()->id()]) }}">My Class</a></li>
                    <li><a href="{{ route('myCourses') }}">Courses</a></li>
                    <li><a href="{{ route('Assignments') }}#">Assignments</a></li> 
                    <li><a href="#">Submission</a></li>
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
                <a href="#" class="dec">{{ auth()->user()->name }}<i class="fas fa-caret-down"></i></a>
                <ul>
                    <li><a href="{{ route('profile') }}">My Account</a></li>
                    <li><a href="{{ route('logout') }}">Logout</a></li>
                </ul>
            </li>
            <li><a></a><i></i></li>
                <div class="profile-image">
                    <img src="{{ asset('storage/'.auth()->user()->image) }}" alt="Profile Image">
                </div>
        </ul>
    </nav>
    @elseif(auth()->user()->role === 'Teacher')
    <nav>
        
        <a href="javascript:void(0);" onclick="history.back();" style="color: aliceblue;font-size:25px">
            <label for="exampleInputname" class="formbold-form-label"><i class="fas fa-arrow-left"></i></label>
        </a>
             
        <label class="logo">ScolarNet</label>
        <ul>
            <li><a class="active" href="{{ route('home') }}">Home</a></li>
            <li>
                <a href="#">Classes<i class="fas fa-caret-down"></i></a>
                <ul>
                    <li><a href="{{ route('Myclass', ['teacherId' => auth()->id()]) }}">My Classes</a></li>
                     <li><a href="{{ route('add_resource_form') }}">Add course</a></li>
                    <li><a href="{{ route('MyCourses') }}">My courses</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Assinments<i class="fas fa-caret-down"></i></a>
                <ul>
                    <li><a href="">Add Assinment</a></li>
                    <li><a href="#">My Assignments</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="dec">{{ auth()->user()->name }}<i class="fas fa-caret-down"></i></a>
                <ul>
                    <li><a href="{{ route('profile') }}">My Account</a></li>
                    <li><a href="{{ route('logout') }}">Logout</a></li>
                </ul>
            </li>
            <li><a></a><i></i></li>
                <div class="profile-image">
                    <img src="{{ asset('storage/'.auth()->user()->image) }}" alt="Profile Image">
                </div>
        </ul>
    </nav>
    @endif


    @endauth
    @guest
    <nav>
        <label class="logo">ScolarNet</label>
        <ul>


            <li class="nav-item">
                <a href="{{ route('showlogin') }}" class="dec">Login</a>
            </li>


        </ul>
    </nav>
    @endguest
   </body>
</html>
