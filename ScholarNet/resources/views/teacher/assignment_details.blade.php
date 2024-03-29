<x-master :title="$assignment->titre">
    <head>
        <link href="{{ asset('css/details.css') }}" rel="stylesheet">
        <style>
            .doc {
                display: flex;
                border: 1px solid #ccc;
                position: relative;
                padding: 0px;
                margin: 0px;
                height: 80px;
                border-radius: 20%;
                bottom: -35px;
                z-index: 1000;
            }

            .div2 {
                font-size: 18px;
                position: absolute;
                top: -5px;
            }

            .aadd {
                color: blueviolet;
                text-decoration: underline;
                font-family: Georgia, 'Times New Roman', Times, serif;
            }

            .div3 {
                color: grey;
                position: absolute;
                right: 10px;
                top: 40%;
            }
            .sup {
                position: absolute;
                bottom: 50px;
                right: 120px;
                width: 170px;
                background-color: #ff4444;
                color: #fff;
                border: none;
                padding: 8px 16px;
                border-radius: 4px;
                cursor: pointer;
                margin-bottom: 10px; /* Adjusted margin */
            }

            .view-submissions-button {
                position: absolute;
                bottom: 50px;
                right: 300px; /* Adjusted right position */
                width: 170px;
                background-color: #4CAF50;
                color: white;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                font-size: 16px;
                margin-bottom: 10px; /* Adjusted margin */
            }

            /* Hover effect for the button */
            .sup:hover {
                background-color: #cc0000;
            }

            .view-submissions-button:hover {
                background-color: #45a049;
            }

        </style>
    </head>
    <body>
        <div class="center-container">
            <div class="card-list">
                <article class="card">
                    <div class="card-header">
                        <img src="{{ asset('storage/'.$assignment->teacher->image) }}" alt="">
                        <div><a href="{{ route("showProfile",$assignment->teacher->id) }}">{{ $assignment->teacher->name }}</a></div>
                        <div>{{ $assignment->createdAt }}</div>
                    </div>
                    <div class="card-header">
                        <div>Deadline : {{ $assignment->deadline }}</div>
                    </div>
                    <figure class="card-image">
                        <div>{{ $assignment->titre }}</div>
                        <div>{{ $assignment->description }}</div>
                        @if (trim($assignment->fichier) !== '' || $assignment->fichier !== null )
                        <div class="doc">
                            <div class="div2"><a title="Download"  class="aadd" href="{{ route('showdocA',$assignment) }}">{{ $assignment->titre.'.docx' }}</a></div>
                            <div class="div3">size : {{ $fileSizeInKB }} KB</div>
                        </div>
                        @endif
                        @if (auth()->user()->id === $assignment->teacher->id)
                        <form action="{{ route('assignments.destroy',$assignment->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="sup" onclick="return confirm('Do you want to delete this assignment ?')"  >Delete</button>
                        </form>
                        @endif
                        <form action="{{ route('assignment.submissions', $assignment->id) }}" method="GET">
                            <button class="view-submissions-button"   type="submit"> Submissions</button>
                        </form>

                    </figure>
                </article>
            </div>
        </div>
    </body>
</x-master>
