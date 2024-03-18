<x-master :title="$assignment->titre">
    <head>
        <link href="{{ asset('css/details.css') }}" rel="stylesheet">
        <style>
            /* Add your custom styles here */
            .card-list {
                display: flex;
                justify-content: center;
                align-items: center;

                height: calc(80vh - 100px);
            }

            .card {
                background-color: #f9f9f9;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                padding: 20px;
                max-width: 400px;
                width: 100%;
                margin: 0 auto;
            }

            .card-header {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 10px;
            }

            .card-image {
                text-align: center;
                margin-bottom: 20px;
            }

            .card-image img {
                max-width: 100%;
                border-radius: 8px;
            }

            .card-image div {
                margin-bottom: 10px;
            }

            .doc {
                margin-top: 20px;
            }

            .sup {
                background-color: #f44336;
                color: white;
                border: none;
                border-radius: 5px;
                padding: 10px 20px;
                cursor: pointer;
            }

            .sup:hover {
                background-color: #d32f2f;
            }
        </style>
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
