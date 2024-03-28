<x-master title="assignment">
    <head>
        <link rel="stylesheet" href="{{ asset('css/uploadfile.css') }}">
    </head>
    <body style=" background-image: url('{{ asset('image/students-study-clipart-xl.png') }}');">
        @include('partials.flashbag')
        <div class="wrapper fadeInDown">
        <div id="formContent" >
          <h2 class="active"> Assignment </h2>
          <form method="POST" action="{{ route('emailPageVerify') }}">
            @csrf
            <input type="file" id="login" class="fadeIn second" name="email" >
            <input type="submit" class="fadeIn fourth" value="Submit">
          </form>
      
          <!-- Remind Passowrd -->
          <div id="formFooter">
            <a class="underlineHover" href="{{ route('login') }}">Return to Assignment details</a>
          </div>
      
        </div>
      </div>
    </body>
    </html>
</x-master>