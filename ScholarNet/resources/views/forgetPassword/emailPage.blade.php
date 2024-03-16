<head>
    <link href="{{ asset('css/emailPage.css') }}" rel="stylesheet">
</head>
<body style=" background-image: url('{{ asset('image/forget-password-clipart-xl.png') }}');">
    <div class="wrapper fadeInDown">
    <div id="formContent" >
      <!-- Tabs Titles -->
      <h2 class="active"> ScholarNet </h2>
  
      <!-- Login Form -->
      <form>
        <input type="text" id="login" class="fadeIn second" name="email" placeholder="Enter Your E-mail">
        <input type="submit" class="fadeIn fourth" value="Submit">
      </form>
  
      <!-- Remind Passowrd -->
      <div id="formFooter">
        <a class="underlineHover" href="{{ route('login') }}">Return to Login</a>
      </div>
  
    </div>
  </div>
</body>