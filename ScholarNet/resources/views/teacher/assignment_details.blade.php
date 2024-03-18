<x-master :title="$assignment->titre">
    <head>
        <link href="{{ asset('css/details.css') }}" rel="stylesheet">


    </head>
    <body>
        <div class="card-list">
            <article class="card">
                <div class="card-header">
                    <!-- Display teacher's image, name, and creation date -->
                    <div><a href="{{ route("showProfile", $assignment->teacher->id) }}">{{ $assignment->teacher->name }}</a></div>
                    <div>{{ $assignment->createdAt }}</div>
                </div>
                <div class="card-header">
                    <div>{{ $assignment->module->nom }}</div>
                </div>
                <figure class="card-image">
                    <div>{{ $assignment->titre }}</div>
                    <div>{{ $assignment->description }}</div>
                    <div class="doc">
                        <a title="Download" class="aadd" href="{{ asset('storage/' . $assignment->fichier) }}" >{{ $assignment->titre.'.docx' }}</a>
                    </div>
                </figure>
                <form action="{{ route('assignments.destroy', $assignment->id) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <button class="sup" onclick="return confirm('Do you want to delete this assignment?')">Delete</button>
                </form>
            </article>
        </div>
    </body>
</x-master>
