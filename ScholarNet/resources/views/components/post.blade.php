<!DOCTYPE html>
<html lang="en">
<head>
    <link href="{{ asset('css/post.css') }}" rel="stylesheet">
</head>
<body>
    <h1 class="head">Latest Publications</h1>

    @foreach ($publication as $pub)
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <article class="blog-card">
                    <div class="blog-card__info">
                        <h4 style="text-align: center">{{ $pub->titre }}</h4>
                        <p>{{ $pub->description }}</p>
                        <p>Date: {{ $pub->created_at->format('d-m-Y') }}</p>
                        <div class="image-container">
                            <img src="{{ asset('storage/'.$pub->imagepub)}}" alt="{{ $pub->titre }}">
                        </div>
                    </div>
                </article>
            </div>
            @auth
            @if (auth()->user()->role==='Admin')
            <form action="{{ route('publication.destroy',$pub->id) }}" method="post">
                @method('DELETE')
                @csrf
                <button onclick="return confirm('Do you want to delete this post ?')">Delete</button>
            </form>
            @endif
            @endauth
        </div>
    </div>
    @endforeach
</body>
</html>
