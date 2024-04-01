<x-master :title="$Assignment->titre">
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
        <div class="center-container">
        <div class="card-list">
            <article class="card">
                <div class="card-header">
                    <img src="{{ asset('storage/'.$Assignment->teacher->image) }}" alt="">
                    <div><a href="{{ route("showProfile",$Assignment->teacher->id) }}">{{ $Assignment->teacher->name }}</a></div>
                    <div>{{ $Assignment->createdAt }}</div>
                </div>
                <div class="card-header">
                    <div>Deadline : {{ $Assignment->deadline }}</div>
                </div>
                <figure class="card-image">
                    <div>{{ $Assignment->titre }}</div>
                    <div>{{ $Assignment->description }}</div>
                    @if (trim($Assignment->fichier) !== '' || $Assignment->fihier !== null )
                    <div class="doc">
                        <div class="div2"><a title="Download"  class="aadd" href="{{ route('showdocA',$Assignment) }}">{{ $Assignment->titre.'.docx' }}</a></div>
                        <div class="div3">size : {{ $fileSizeInKB }} KB</div>
                    </div>
                    <div style="bottom:20px;">
                    @endif
                    @if (auth()->user()->id === $Assignment->teacher->id)
                    <form action="{{ route('assignments.destroy',$Assignment->id) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="sup" onclick="return confirm('Do you want to delete this Assignment ?')"  >Delete</button>
                    </form>
                    @endif
                    @if (auth()->user()->role === "Student")
                        @if(strtotime($Assignment->deadline) > strtotime(now()))
                            <div class="d-grid gap-2 col-6 mx-auto" >
                                <a href="{{ route('studentsubass',$Assignment->id) }}" class="btn btn-success" type="button" style="position:absolute; bottom: 20px;left:23%;width:500px;height:40px;">Submit My Assignment</a>
                            </div>
                        @endif
                    @endif 
                    </div>
            </article>
        </div>
        </div>
    </body>
</x-master>

