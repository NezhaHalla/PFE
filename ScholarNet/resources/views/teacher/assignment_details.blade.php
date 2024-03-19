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
                        <form action="{{ route('assignment.destroy',$assignment->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="sup" onclick="return confirm('Do you want to delete this course ?')"  >Delete</button>
                        </form>
                        @endif

                    </figure>
                </article>
            </div>
        </div>
    </body>
</x-master>
