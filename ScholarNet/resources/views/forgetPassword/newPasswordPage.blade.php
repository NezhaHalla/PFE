<head>
    <link href="{{ asset('css/emailPage2.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <title>New Password</title>
</head>
<body style=" background-image: url('{{ asset('image/0012185-2-clipart-xl.png') }}');">
    @include('partials.flashbag')
    <div class="wrapper fadeInDown">
    <div id="formContent" >
      <!-- Tabs Titles -->
      <h2 class="active"> ScholarNet </h2>
  
      <!-- Login Form -->
      <form method="POST" action="{{ route('newPasswordConf') }}">
        @csrf
        <input type="password" id="login" class="fadeIn second" name="password" placeholder="Enter Your New Password">
        @error('code')
            <div class="text-danger">{{$message}}</div>
        @enderror
        <input type="password" id="login" class="fadeIn second" name="password_confirmation" placeholder="Confirm New Password">
        <input type="submit" class="fadeIn fourth" value="Submit">
      </form>
  
    </div>
  </div>
</body>