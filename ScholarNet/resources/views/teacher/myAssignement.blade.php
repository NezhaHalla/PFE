@foreach($assignments as $assignment)
    <div>
        <h3>{{ $assignment->titre }}</h3>
        <p>{{ $assignment->description }}</p>
        <p>Deadline: {{ $assignment->deadline }}</p>
      
    </div>
@endforeach
