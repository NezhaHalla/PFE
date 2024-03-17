<x-master :title="$publication->titre">
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="{{ asset('css/post.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <article class="blog-card">
                    <div class="blog-card__info">
                        <h4 style="text-align: center ; border-bottom:1px solid rgb(43, 43, 43) ;padding-top:50px;">{{ $publication->titre }}</h4>
                        <p style="padding-top: 40px">{{ $publication->description }}</p>
                        <p>Date: {{ $publication->created_at->format('d-m-Y') }}</p>
                        <div class="image-container">
                            <img src="{{ asset('storage/'.$publication->imagepub)}}" alt="{{ $publication->titre }}">
                        </div>
                    </div>
                </article>
            </div>
            @auth
            @if (auth()->user()->role==='Admin')
            <form action="{{ route('publication.destroy',$publication->id) }}" method="post">
                @method('DELETE')
                @csrf
                <button style="background-color: #ff4444;color: #fff;border: none;padding: 8px 16px;border-radius: 4px;cursor: pointer;" onclick="return confirm('Do you want to delete this post ?')">Delete</button>
            </form>
            @endif
            @endauth
        </div>
    </div>
</body>
</html>
</x-master>
