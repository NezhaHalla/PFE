<x-master :title="$course->titre">
    <head>
        <link href="{{ asset('css/details.css') }}" rel="stylesheet">
        <style>
            .doc {
        display: flex;
        border: 1px solid #ccc;
        position: relative;
        padding: 0px;
        margin:0px;
        height:80px;
        border-radius: 20%;
        bottom: -35px;
        z-index: 1000;
    }

    .div2 {

        font-size: 18px;
        position: absolute;
        top:-5px;
    }

    .aadd{
        color: blueviolet;
        text-decoration: underline;
        font-family: Georgia, 'Times New Roman', Times, serif;
    }

    .div3 {
        color: grey;
        position: absolute;
        right:10px;
        top: 40%;
    }
        </style>
    </head>
    <body>
        <div class="card-list">
            <article class="card">
                <div class="card-header">
                    <img src="{{ asset('storage/'.$course->teacher->image) }}" alt="">
                    <div><a href="{{ route("showProfile",$course->teacher->id) }}">{{ $course->teacher->name }}</a></div>
                    <div>{{ $course->createdAt }}</div>
                </div>
                <div class="card-header">
                    <div>{{ $course->module->nom }}</div>
                </div>
                <figure class="card-image">
                    <div>{{ $course->titre }}</div>
                    <div>{{ $course->description }}</div>
                    <div class="doc">
                        <div class="div2"><a title="Download"  class="aadd" href="{{ route('showdoc',$course) }}">{{ $course->titre.'.docx' }}</a></div>
                        <div class="div3">size : {{ $fileSizeInKB }} KB</div>
                    </div>
                {{-- </figure>
                <div class="icons">
                    <a class="icon-button b2" href="{{ route("downloads",$course->id) }}" >
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 15v4h14v-4M12 8v8M9 11l3 3 3-3M12 3v4" />
                            </svg>
                    </a>--}}
                    @if (auth()->user()->id === $course->teacher->id)
                    <form action="{{ route('course.destroy',$course->id) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="sup" onclick="return confirm('Do you want to delete this course ?')"  >Delete</button>
                    </form>
                    @endif
                    {{-- <button class="icon-button b1">
                        <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 19c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V8H4v11zM9 12h6M12 9v4" />
                        </svg>
                    </button>
                </div> --}}
            </article>
        </div>
    </body>
   
</x-master>
