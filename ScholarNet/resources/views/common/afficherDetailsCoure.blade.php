<x-master title="My Courses">
    <head>
        <link href="{{ asset('css/details.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="card-list">
            <article class="card">
                <div class="card-header">
                    <img src="{{ asset('storage/'.$course->teacher->image) }}" alt="">
                    <div>{{ $course->teacher->name }}</div>
                    <div>{{ $course->createdAt }}</div>
                </div>
                <div class="card-header">
                    <div>{{ $course->module->nom }}</div>
                </div>        
                <figure class="card-image">
                    <div>{{ $course->titre }}</div>
                    <div>{{ $course->description }}</div>
                </figure>
                <div class="icons">
                    <button class="icon-button b1" onclick="saveFile()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 19c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V8H4v11zM9 12h6M12 9v4" />
                        </svg>
                    </button>
                    <button class="icon-button b2" onclick="downloadFile()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" display="block" id="Download">
                            <path d="M5 15v4h14v-4M12 8v8M9 11l3 3 3-3M12 3v4" />
                        </svg>
                    </button>
                </div>
            </article>
        </div>
    </body>
</x-master>
