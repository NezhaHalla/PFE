<x-master title="My Assinments">
    <head>
        <link href="{{ asset('css/course.css') }}" rel="stylesheet">
    </head>
    <body>
        <form action="{{ route('searchAssignment') }}" method="GET">
            <div class="input-group rounded" style="padding-top:60px;text-align:center; width:500px;left:35%">
                <input type="search" class="form-control rounded" name="search" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                <span class="input-group-text border-0" id="search-addon">
                <button type="submit" style="border: none;background-color:transparent;">
                    <i class="fas fa-search" style="font-size: 30px"></i>
                </button>
                </span>
            </div>
        </form>        
        <ul class="cards">
            @foreach ($assignments as $assignment)
            <li>
              <div href="" class="card" style="background-color:azure">
                <div class="head">{{ $assignment->titre }}</div>
                <div class="description">{{ $assignment->module->nom }}</div>
                <div class="card__overlay">
                  <div class="card__header">            
                    <img class="card__thumb" src="{{ asset('storage/'.$assignment->teacher->image)}}" alt="" />
                    <div class="card__header-text">
                      <h3 class="card__title">{{ $assignment->teacher->name }}</h3>
                      <span class="card__status">{{ $assignment->createdAt }}</span>
                    </div>          
                  </div>
                  <div class="card__description "><a class="button" href="{{ route('assignment.showDetails',$assignment->id) }}">Details</a></div>
                </div>
            </div>
            </li>
            @endforeach
          </ul>          
    </body>
    </html>
</x-master>