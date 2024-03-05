
<x-master title="ALLTeachers">

    <div class="card-container">
        @foreach($teachers as $teacher)
        @include('partials.card', ['user' => $teacher])
        @endforeach
    </div>


</x-master>
