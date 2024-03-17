<head>
    <link href="{{ asset('css/emailPage1.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <title>Verify E-mail</title>
</head>
<body style=" background-image: url('{{ asset('image/lady-girl-tweeting-laptop-clipart-xl.png') }}');">
    @include('partials.flashbag')
    <div class="wrapper fadeInDown">
    <div id="formContent" >
      <!-- Tabs Titles -->
      <h2 class="active"> ScholarNet </h2>
      
        

      <form method="POST" action="{{ route('verify') }}">
        @csrf
        <input type="text" id="login" class="fadeIn second" name="code" placeholder="Enter The Verification Code">
        @error('code')
            <div class="text-danger">{{$message}}</div>
        @enderror
        <input type="submit" class="fadeIn fourth" value="Submit">
      </form>

      
      <div id="formFooter">Your E-mail : nezhahella@gmail.com .
        <a class="underlineHover" href="{{ route('emailPage') }}">Modify ?</a>
      </div>
  
    </div>
  </div>
</body>