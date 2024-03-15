<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.css">
    <link href="{{ asset('css/announcement.css') }}" rel="stylesheet">
</head>
<body>
<div class="slide-container swiper">
    <h1 class="title">Stay Updated with Our Announcements</h1>
    <div class="slide-content">
        <div class="card-wrapper swiper-wrapper">
            @foreach ($announcement as $announce)
                <div class="card swiper-slide">
                    <div class="image-content">
                        <div class="overlay"></div>
                        <div class="card-image">
                            @if (!empty($announce->imagepub))
                                <img src="{{ asset('storage/'.$announce->imagepub) }}" alt="" class="card-img">
                            @endif
                        </div>
                    </div>
                    <div class="card-content">
                        <h2 class="name">{{ $announce->titre }}</h2>
                        <p class="description">{{ $announce->description }}</p>
                        @auth
                        @if (auth()->user()->role==='Admin')
                        <form action="{{ route('publication.destroy',$announce->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="sup" onclick="return confirm('Do you want to delete this announcement ?')" >Delete</button>
                        </form>
                        @endif
                        @endauth
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="swiper-button-next swiper-navBtn"></div>
    <div class="swiper-button-prev swiper-navBtn"></div>
    <div class="swiper-pagination"></div>
</div>
<script src="//cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.js"></script>
<script src="{{ asset('js/announcement.js') }}"></script>
</body>
</html>
