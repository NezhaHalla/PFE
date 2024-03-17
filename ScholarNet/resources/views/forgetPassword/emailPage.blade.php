<head>
    <link href="{{ asset('css/emailPage.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Forget Password</title>
</head>
<body style=" background-image: url('{{ asset('image/forget-password-clipart-xl.png') }}');">
    @include('partials.flashbag')
    <div class="wrapper fadeInDown">
    <div id="formContent" >
      <!-- Tabs Titles -->
      <h2 class="active"> ScholarNet </h2>
  
      <!-- Login Form -->
      <form method="POST" action="{{ route('emailPageVerify') }}">
        @csrf
        <input type="text" id="login" class="fadeIn second" name="email" placeholder="Enter Your E-mail">
        @error('email')
            <div class="text-danger">{{$message}}</div>
        @enderror
        <input type="submit" class="fadeIn fourth" value="Submit">
      </form>
  
      <!-- Remind Passowrd -->
      <div id="formFooter">
        <a class="underlineHover" href="{{ route('login') }}">Return to Login</a>
      </div>
  
    </div>
  </div>
</body>