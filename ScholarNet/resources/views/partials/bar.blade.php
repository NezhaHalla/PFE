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
    position: relative; /* Added position relative to create stacking context */
}

nav ul li a {
    color: white;
    display: block;
    padding: 0 15px;
    line-height: 70px;
    font-size: 20px;
    background: #063247;
    transition: .5s;
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
    width: 100%;
    display: block;
    position: relative;
    border: 1px solid #042331;
}

nav ul ul li a {
    line-height: 50px;
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
    margin-top: 70px; /* Adjust body content to not overlap with the fixed navbar */
}

        </style>
   </head>
   <body>
      <nav>
         <label class="logo">ScolarNet</label>
         <ul>
            <li><a class="active" href="{{ route('home') }}">Home</a></li>
            <li>
               <a href="#">Users
               <i class="fas fa-caret-down"></i>
               </a>
               <ul>
                  <li><a href="#">Python</a></li>
                  <li><a href="#">JQuery</a></li>
                  <li><a href="#">Javascript</a></li>
               </ul>
            </li>
            <li>
               <a href="#">Publications
               <i class="fas fa-caret-down"></i>
               </a>
               <ul>
                  <li><a href="{{ route('publication.create') }}">Add Publication</a></li>
                  <li><a href="#">Back End</a></li>
                  <li><a href="#">Others</a></li>
               </ul>
            </li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Feedback</a></li>
         </ul>
      </nav>
   </body>
</html>
