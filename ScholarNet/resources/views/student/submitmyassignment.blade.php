<x-master :title="$assignment->titre">
    <head>
        <link rel="stylesheet" href="{{ asset('css/uploadfile.css') }}">
    </head>
    {{-- <body style=" background-image: url('{{ asset('image/students-study-clipart-xl.png') }}');"> --}}
        <body>
        <div class="wrapper fadeInDown">
        <div id="formContent" >
          <h3 class="active"> Submit Your Assignment </h3>
          <form method="POST" action="{{ route('exercice.store',$assignment->id) }}" enctype="multipart/form-data">
            @csrf
            <input type="file" id="login" class="fadeIn second" name="fichier" required >
            @error('fichier')
                <div class="text-danger">{{$message}}</div>
            @enderror
            <input type="submit" class="fadeIn fourth" value="Submit">
          </form>
          <div id="formFooter">
            <a class="underlineHover" href="{{ route('assignment.showDetails',$assignment->id) }}">Return to Assignment details</a>
          </div>

        </div>
      </div>
    </body>
    </html>
</x-master>
