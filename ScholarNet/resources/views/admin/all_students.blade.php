



<x-master title="AllStusents">

    <div class="card-container">
        @foreach($students as $student)
        @include('partials.card', ['user' => $student])
         @endforeach
    </div>

</x-master>
