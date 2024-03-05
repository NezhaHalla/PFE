<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Dropdown Menu Bar</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
        <style>
            * {
    margin: 0;
    padding: 0;
    list-style: none;
    text-decoration: none;
}

body {
    font-family: sans-serif;
    user-select: none;
    margin-top: 70px; /* Adjust body content to not overlap with the fixed navbar */
}

nav {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 70px;
    background: #063247;
    box-shadow: 0 3px 15px rgba(0,0,0,.4);
    z-index: 1000; /* Ensure the nav bar is above other elements */
}

nav .logo {
    color: white;
    font-size: 33px;
    font-weight: bold;
    line-height: 70px;
    padding-left: 110px;
}

nav ul {
    float: right;
    margin-right: 30px;
}

nav ul li {
    display: inline-block;
    position: relative;
    margin-left: 20px;
}

nav ul li li {
    margin-left: -32px;
    font-size: 18px;
    width: 100%;
}

nav ul li a {
    color: white;
    display: block;
    padding: 0 15px;
    line-height: 70px;
    font-size: 20px;
    background: #063247;
    transition: .5s;
    text-decoration: none;
}

nav ul ul {
    position: absolute;
    top: 100%;
    left: 0;
    min-width: 200px;
    border-top: 3px solid #063247;
    opacity: 0;
    visibility: hidden;
    background: #063247; /* Added background color for dropdown */
}

nav ul li:hover > ul {
    opacity: 1;
    visibility: visible;
}

nav ul ul li {
    width: 200px;
    display: block;
    position: relative;
    border: 1px solid #042331;
}

nav ul ul li a {
    line-height: 50px;
    text-decoration: none;
}

nav ul ul ul {
    left: 100%;
    top: 0;
    border-top: none;
}

nav ul ul ul li {
    position: relative;
    top: -70px;
    left: 150px;

}

nav ul ul li a i {
    margin-left: 45px;
}

section {
    background: url(bg.jpeg);
    background-position: center;
    background-size: cover;
    height: 100vh;
    margin-top: 70px;
}
.dec{
    text-decoration-line: underline;
}
.profile-image {
    position: absolute;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
    border-radius: 50%;
    overflow: hidden;
}

.profile-image img {
    width: 40px;
    height: 40px;
}


        </style>
   </head>
   <body>
    @auth
    @if (auth()->user()->role === 'Admin')
    <nav>
        <label class="logo">ScolarNet</label>
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
                    <li><a href="">My Account</a></li>
                    <li><a href="{{ route('logout') }}">Logout</a></li>
                </ul>
            </li>
            <li><a></a><i></i></li>
                <div class="profile-image">
                    <img src="{{ asset('storage/'.auth()->user()->image) }}" alt="Profile Image">
                </div>
        </ul>
    </nav>
    @elseif(auth()->user()->role === 'Student')
    <nav>
        <label class="logo">ScolarNet</label>
        <ul>
            <li><a class="active" href="{{ route('home') }}">Home</a></li>
            <li>
                <a href="#">Class<i class="fas fa-caret-down"></i></a>
                <ul>
                    <li><a href="">My Class</a></li>
                    <li><a href="#">Cours</a></li>
                    <li><a href="#">Assignments</a></li>
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
                    <li><a href="">My Account</a></li>
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
        <label class="logo">ScolarNet</label>
        <ul>
            <li><a class="active" href="{{ route('home') }}">Home</a></li>
            <li>
                <a href="#">Classes<i class="fas fa-caret-down"></i></a>
                <ul>
                    <li><a href="">My Classes</a></li>
                    <li><a href="#">Add course</a></li>
                    <li><a href="#">My courses</a></li>
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
                    <li><a href="">My Account</a></li>
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
