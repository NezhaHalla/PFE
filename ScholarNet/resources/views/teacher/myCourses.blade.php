<x-master title="My Courses">
    <head>
        <link href="{{ asset('css/course.css') }}" rel="stylesheet">
    </head>
    <body>
        <ul class="cards">
            @foreach ($courses as $index => $course)
            @php
            $colors = ['#F0F8FF', '#FFFAF0', '#F0FFF0', '#FFFFF0', '#F5FFFA'];
            $color = $colors[$index % count($colors)];
        @endphp
            <li>
              <div href="" class="card" style="background-color:{{  $color}};">
                <div class="head">{{ $course->titre }}</div>
                <div class="description">{{ $course->module->nom }}</div>
                <div class="card__overlay">
                  <div class="card__header">            
                    <img class="card__thumb" src="{{ asset('storage/'.$course->teacher->image)}}" alt="" />
                    <div class="card__header-text">
                      <h3 class="card__title">{{ $course->teacher->name }}</h3>
                      <span class="card__status">{{ $course->createdAt }}</span>
                    </div>          
                  </div>
                  <div class="card__description "><a class="button" href="{{ route('showDetails',$course->id) }}">Details</a></div>
                </div>
            </div>
            </li>
            @endforeach
          </ul>          
    </body>
    </html>
</x-master>
